#!/usr/bin/env python3
"""
Convierte el build de Vite de Team It en views de Backbone AI.

La plataforma sirve cada view en su propia URL (`/preview/{id}`), así que los
links root-relative del sitio (`/servicios/cloud/`) dan 404 garantizado ahí.
Por eso el generador corre en dos pasadas:

  1. Sin `preview_ids.json`: genera las views con los links tal cual vienen del
     build. Sirve para subirlas y que la plataforma les asigne un id.
  2. Con `preview_ids.json` ya escrito: regenera todo apuntando cada link
     interno al `/preview/{id}` de la view destino.

El HTML del build no es Blade — trae `@keyframes` y `@media` en bloques
`<style>` — así que cada view se envuelve en `@verbatim` y la plataforma lo
sirve literal.

Uso:  python3 make_views.py [--dist RUTA] [--asset-base /assets]
"""

import argparse
import json
import re
import shutil
from pathlib import Path

AQUI = Path(__file__).resolve().parent
DIST = Path.home() / 'Desktop' / 'Teamit' / 'dist'

# ruta del sitio  →  nombre de la view (sin .blade.php)
PAGINAS = {
    'index.html': 'index',
    'hablemos/index.html': 'hablemos',
    'como-lo-hacemos/index.html': 'como-lo-hacemos',
    'servicios/soluciones-de-infraestructura/index.html': 'servicios/soluciones-de-infraestructura',
    'servicios/servicios-profesionales/index.html': 'servicios/servicios-profesionales',
    'servicios/cloud/index.html': 'servicios/cloud',
    'servicios/computo-general/index.html': 'servicios/computo-general',
    'recursos/garantias/index.html': 'recursos/garantias',
    'recursos/condiciones-de-garantias/index.html': 'recursos/condiciones-de-garantias',
    'recursos/pqrs/index.html': 'recursos/pqrs',
    'recursos/recoleccion-de-residuos/index.html': 'recursos/recoleccion-de-residuos',
    'recursos/videos/index.html': 'recursos/videos',
}

# href del sitio  →  view destino. El home responde a varias formas.
RUTAS = {'/': 'index', '/index.html': 'index'}
for archivo, view in PAGINAS.items():
    if archivo == 'index.html':
        continue
    carpeta = '/' + archivo[: -len('index.html')]
    RUTAS[carpeta] = view          # /servicios/cloud/
    RUTAS[carpeta.rstrip('/')] = view  # /servicios/cloud


# Carpetas del build que son recursos, no páginas. El resto de `dist/` son
# carpetas de rutas (servicios/, recursos/, …) y no van al árbol público.
RECURSOS = ('assets', 'brand', 'certs', 'img', 'partners')


def copiar_assets(dist: Path, destinos: list[Path]) -> int:
    """La plataforma publica `assets/` de la raíz y `production/views/assets/`
    como par; se escriben los dos para que no queden desfasados."""
    fuentes = [dist / n for n in RECURSOS if (dist / n).is_dir()]
    total = 0
    for destino in destinos:
        if destino.exists():
            shutil.rmtree(destino)
        destino.mkdir(parents=True)
        for carpeta in fuentes:
            shutil.copytree(carpeta, destino / carpeta.name)
        total = sum(1 for _ in destino.rglob('*') if _.is_file())
    return total


def reescribir_links(html: str, ids: dict) -> tuple[str, int]:
    """Apunta cada href interno al preview de su view destino."""
    if not ids:
        return html, 0

    cambios = 0

    def sub(m):
        nonlocal cambios
        comilla, href = m.group(1), m.group(2)
        # El ancla viaja con el link: `/#adn` tiene que caer en el home.
        ruta, sep, frag = href.partition('#')
        view = RUTAS.get(ruta) or RUTAS.get(ruta.rstrip('/') or '/')
        if view and view in ids:
            cambios += 1
            return f'href={comilla}/preview/{ids[view]}{sep}{frag}{comilla}'
        return m.group(0)

    html = re.sub(r'href=(["\'])(/[^"\'?]*)\1', sub, html)
    return html, cambios


def main():
    ap = argparse.ArgumentParser()
    ap.add_argument('--dist', default=str(DIST))
    ap.add_argument(
        '--asset-base',
        default='/assets',
        help='Prefijo público de los assets en la plataforma.',
    )
    args = ap.parse_args()

    dist = Path(args.dist)
    if not (dist / 'index.html').exists():
        raise SystemExit(f'No encuentro el build en {dist}. Corré `npm run build` primero.')

    ids = {}
    mapa = AQUI / 'preview_ids.json'
    if mapa.exists():
        ids = json.loads(mapa.read_text())

    views = AQUI / 'production' / 'views'
    if views.exists():
        shutil.rmtree(views)
    views.mkdir(parents=True)

    archivos = copiar_assets(dist, [AQUI / 'assets', views / 'assets'])

    total_links = 0
    for origen, view in PAGINAS.items():
        html = (dist / origen).read_text()

        # El build referencia los recursos desde la raíz (`/assets/…`,
        # `/img/…`). La plataforma los publica bajo `/projects/{slug}/assets/`,
        # así que se les antepone ese prefijo sin tocar el sitio original.
        for carpeta in RECURSOS:
            for comilla in ('"', "'"):
                html = html.replace(
                    f'{comilla}/{carpeta}/', f'{comilla}{args.asset_base}/{carpeta}/'
                )

        html, n = reescribir_links(html, ids)
        total_links += n

        salida = views / f'{view}.blade.php'
        salida.parent.mkdir(parents=True, exist_ok=True)
        salida.write_text(f'@verbatim\n{html}\n@endverbatim\n')

    print(f'{len(PAGINAS)} views · {archivos} assets por copia · {total_links} links al preview')
    if not ids:
        print('Sin preview_ids.json todavía: los links quedan root-relative (404 en el preview).')


if __name__ == '__main__':
    main()
