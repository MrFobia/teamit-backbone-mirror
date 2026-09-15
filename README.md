# Espejo de Team It para Backbone AI

Repo de **transporte**: no se desarrolla acá. La fuente es `~/Desktop/Teamit`
(Vite + Tailwind v4 + Vanilla JS); esto es lo que la plataforma clona y pullea.

Proyecto en la plataforma: `ai-bbltm.backbone.digital/production/projects/124`
("Teamit", slug `teamit`). 12 views, previews **1120–1131**.

## Re-sincronizar

```bash
cd ~/Desktop/Teamit
npm run build                                   # dist/  → HTML + assets
rm -rf dist-mirror
for e in src/js/main.js src/js/hablemos.js src/js/page.js; do
  ENTRY=$e npx vite build --config vite.mirror.config.js
done                                            # dist-mirror/ → bundles IIFE

cd ~/Documents/Desarrollo/teamit-mirror
python3 make_views.py --asset-base /projects/teamit/assets
git add -A && git commit -m "…" && git push

gh repo edit --visibility public --accept-visibility-change-consequences
# → Versions → Pull from origin/main   (NO commitear el scaffold)
gh repo edit --visibility private --accept-visibility-change-consequences
```

Si cambian los ids de preview, actualizar `preview_ids.json` y volver a correr
`make_views.py`.

## Por qué el generador hace lo que hace

Cuatro restricciones de la plataforma, todas verificadas contra el server:

1. **Cada view vive en `/preview/{id}`**, no en la ruta del sitio. Un link
   root-relative (`/servicios/cloud/`) da 404 seguro. `make_views.py` reescribe
   los 507 links internos al preview de su destino, anclas incluidas.
2. **Los `.css` se sirven como `text/plain`** y Chrome los descarta con MIME
   estricto. La hoja va embebida en cada view. (A Viraal le pasa lo mismo.)
3. **Los `.js` también salen como `text/plain`, y con `x-content-type-options:
   nosniff`**, así que no ejecuta nada externo: ni módulos ni scripts clásicos.
   Por eso el build alterno `vite.mirror.config.js` compila un IIFE por entrada
   (sin imports que resolver) y se incrusta inline.
4. **Un script clásico inline en el `<head>` corre antes que el body.** El
   `type="module"` original iba diferido, así que el bundle se envuelve en
   `DOMContentLoaded` para conservar el orden.

Los assets que sí funcionan (imágenes, fuentes) quedan externos bajo
`/projects/teamit/assets/…`, con la copia duplicada en `assets/` y
`production/views/assets/` como espera la plataforma.

## Trampas conocidas

- **No commitear el scaffold post-clone** (`CLAUDE.md`, `production/memory/`).
  Si se commitea, la rama diverge de origin, el pull falla para siempre y el
  proyecto queda muerto.
- El PAT del Profile no autentica contra GitHub: de ahí el baile de
  público/privado en cada sync.
- Borrar el proyecto no borra `storage/app/projects/teamit` del server: si hay
  que recrearlo, va con otro nombre.
