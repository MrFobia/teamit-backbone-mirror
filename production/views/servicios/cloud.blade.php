@verbatim
<!doctype html>
<html lang="es-CO">
  <head>
    <title>Cloud — Team It</title>
    <meta name="description" content="Modelos de solución como servicio, servicios de cloud y colocation: disponibilidad, crecimiento, seguridad, monitoreo y soporte." />
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#08090d" />

<!--
  CSS crítico, en línea a propósito: la hoja del sitio entra por el bundle, así
  que hasta que el JS corre el navegador pinta el HTML pelado sobre blanco. Esto
  fija el fondo oscuro desde el primer byte y evita el fogonazo.
-->
<style>
  html {
    background: #08090d;
    color-scheme: dark;
  }
  body {
    margin: 0;
    background: #08090d;
    color: #fff;
    font-family: Inter, ui-sans-serif, system-ui, -apple-system, sans-serif;
    -webkit-font-smoothing: antialiased;
  }
  /* Nada del contenido se ve hasta que la hoja real está aplicada. */
  body:not([data-booted]) main,
  body:not([data-booted]) .site-header,
  body:not([data-booted]) footer {
    visibility: hidden;
  }
</style>
<link rel="icon" type="image/png" href="/brand/teamit-logo.png" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap"
/>

    <script type="module" crossorigin src="/assets/site-ho01C0BD.js"></script>
    <script type="module" crossorigin src="/assets/page-vt8PnsNB.js"></script>
    <link rel="stylesheet" crossorigin href="/assets/site-B_lbNtm9.css">
  </head>

  <body data-menu="closed">
    <!--
  Pantalla de carga. Va en línea (markup, estilos y script) a propósito: tiene
  que pintarse antes de que el bundle exista, así que no puede depender de
  app.css ni de ningún módulo.

  El isotipo se arma bloque por bloque con las mismas proporciones que usa la
  secuencia 3D del home (los rectángulos medidos sobre el PNG oficial), así la
  entrada al sitio y el cierre del ADN son el mismo gesto.
-->
<style>
  .boot {
    position: fixed;
    inset: 0;
    z-index: 999;
    display: grid;
    place-content: center;
    justify-items: center;
    gap: 34px;
    background: #08090d;
    /* Arranca invisible: si la página ya está en caché y resuelve en un par de
       frames, el loader no llega a mostrarse y no hay parpadeo. */
    opacity: 0;
    transition:
      opacity 520ms cubic-bezier(0.16, 1, 0.3, 1),
      visibility 520ms;
  }
  .boot[data-show='true'] {
    opacity: 1;
  }
  .boot[data-done='true'] {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
  }

  .boot__mark {
    position: relative;
    width: 92px;
    aspect-ratio: 192 / 250;
  }
  .boot__mark i {
    position: absolute;
    display: block;
    background: #fff;
    opacity: 0;
    transform: translateY(14px) scale(0.82);
    animation: boot-block 2.4s cubic-bezier(0.16, 1, 0.3, 1) infinite;
    animation-delay: var(--d);
  }
  /* Los cinco bloques del isotipo, en porcentajes de la caja de la marca. */
  .boot__mark i:nth-child(1) {
    left: 0;
    top: 43.95%;
    width: 100%;
    height: 56.05%;
    --d: 0ms;
  }
  .boot__mark i:nth-child(2) {
    left: 26%;
    top: 26.78%;
    width: 43.8%;
    height: 17.93%;
    --d: 110ms;
  }
  .boot__mark i:nth-child(3) {
    left: 74%;
    top: 21.6%;
    width: 21.8%;
    height: 16.74%;
    --d: 220ms;
  }
  .boot__mark i:nth-child(4) {
    left: 38.6%;
    top: 0;
    width: 26%;
    height: 19.98%;
    --d: 330ms;
  }
  .boot__mark i:nth-child(5) {
    left: 78%;
    top: 0.76%;
    width: 16.9%;
    height: 12.85%;
    background: #0274d8;
    --d: 440ms;
  }

  @keyframes boot-block {
    0% {
      opacity: 0;
      transform: translateY(14px) scale(0.82);
    }
    18%,
    72% {
      opacity: 1;
      transform: none;
    }
    92%,
    100% {
      opacity: 0;
      transform: translateY(-10px) scale(0.94);
    }
  }

  .boot__bar {
    width: 92px;
    height: 2px;
    overflow: hidden;
    background: rgb(255 255 255 / 0.12);
  }
  .boot__bar span {
    display: block;
    width: 40%;
    height: 100%;
    background: #0274d8;
    animation: boot-bar 1.4s cubic-bezier(0.65, 0, 0.35, 1) infinite;
  }
  @keyframes boot-bar {
    0% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(250%);
    }
  }

  .boot__label {
    font-family: 'Space Grotesk', ui-sans-serif, system-ui, sans-serif;
    /* 0.72rem = el mismo tamaño que .eyebrow en app.css; por debajo de 11px
       este micro-label deja de leerse en pantallas densas. */
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: rgb(255 255 255 / 0.35);
  }

  /* Sin JS el loader no puede atrapar la página. */
  .no-js-hide .boot {
    display: none;
  }

  @media (prefers-reduced-motion: reduce) {
    .boot__mark i {
      opacity: 1;
      transform: none;
      animation: none;
    }
    .boot__bar span {
      animation: none;
      width: 100%;
    }
  }
</style>

<div class="boot" id="boot" role="status" aria-live="polite" aria-label="Cargando">
  <div class="boot__mark" aria-hidden="true">
    <i></i><i></i><i></i><i></i><i></i>
  </div>
  <div class="boot__bar" aria-hidden="true"><span></span></div>
  <p class="boot__label">Team It</p>
</div>

<noscript>
  <style>
    .boot {
      display: none;
    }
    body:not([data-booted]) main,
    body:not([data-booted]) .site-header,
    body:not([data-booted]) footer {
      visibility: visible;
    }
  </style>
</noscript>

<script>
  (function () {
    var boot = document.getElementById('boot');
    if (!boot) return;

    var GRACE = 180; // por debajo de esto el loader ni se asoma
    var MIN = 900; // si se asomó, se queda lo suficiente para leerse
    var MAX = 4000; // y nunca más de esto, pase lo que pase
    var start = Date.now();
    var shown = false;
    var done = false;

    var showTimer = setTimeout(function () {
      if (done) return;
      shown = true;
      boot.setAttribute('data-show', 'true');
    }, GRACE);

    function reveal() {
      if (done) return;
      done = true;
      clearTimeout(showTimer);
      document.body.setAttribute('data-booted', '');
      boot.setAttribute('data-done', 'true');
      setTimeout(function () {
        boot.parentNode && boot.parentNode.removeChild(boot);
      }, 600);
    }

    function finish() {
      // El mínimo solo aplica si el loader alcanzó a aparecer: así una página
      // cacheada entra directo y una carga fría no muestra un flash a medias.
      if (!shown) return reveal();
      setTimeout(reveal, Math.max(0, MIN - (Date.now() - start)));
    }

    // Se espera a lo que de verdad provoca el fogonazo: la hoja de estilos del
    // bundle y las fuentes. `site.js` avisa cuando ya aplicó sus estilos.
    var ready = [
      new Promise(function (res) {
        window.addEventListener('teamit:ready', res, { once: true });
      }),
    ];
    if (document.fonts && document.fonts.ready) ready.push(document.fonts.ready);

    Promise.all(ready).then(finish);
    setTimeout(reveal, MAX);
  })();
</script>


<a
  href="#contenido"
  class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:bg-blue focus:px-4 focus:py-2 focus:text-white"
  >Saltar al contenido</a
>

<header class="site-header" data-stuck="false">
  <div class="shell flex h-[72px] items-center justify-between">
    <a href="/" class="logo-swap" aria-label="Team It — inicio">
      <img
        src="/brand/teamit-logo-dark.png"
        alt="Team It"
        width="450"
        height="270"
        class="logo-on-dark h-9 w-auto"
      />
      <img
        src="/brand/teamit-logo.png"
        alt=""
        aria-hidden="true"
        width="450"
        height="270"
        class="logo-on-light h-9 w-auto"
      />
    </a>

    <nav class="hidden items-center gap-8 lg:flex" aria-label="Principal">
      <a class="nav-link" data-nav href="/#adn">Nuestro ADN</a>

      <!--
        Servicios es el único mega menú: son cuatro destinos que se eligen por
        lo que se ve, no por el nombre. Recursos se queda como lista simple
        porque son trámites, y ahí la imagen no aporta nada.
      -->
      <div class="nav-group nav-group--mega" data-nav-group>
        <button class="nav-link nav-link--toggle" data-nav-toggle aria-expanded="false">
          Servicios
          <svg viewBox="0 0 10 6" aria-hidden="true"><path d="M1 1l4 4 4-4" /></svg>
        </button>

        <div class="nav-mega">
          <div class="shell">
            <p class="nav-mega__kicker">Nuestro portafolio</p>

            <div class="nav-mega__grid">
              <a class="mega-card" href="/servicios/soluciones-de-infraestructura/" style="--i: 0">
                <span class="mega-card__media">
                  <img
                    src="/img/teamit-rack.jpg"
                    alt=""
                    width="1086"
                    height="1448"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
                <span class="mega-card__name">Soluciones de infraestructura</span>
                <span class="mega-card__desc"
                  >Servidores, almacenamiento, redes, backup y seguridad</span
                >
              </a>

              <a class="mega-card" href="/servicios/servicios-profesionales/" style="--i: 1">
                <span class="mega-card__media">
                  <img
                    src="/img/teamit-tecnico.jpg"
                    alt=""
                    width="1400"
                    height="933"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
                <span class="mega-card__name">Servicios profesionales</span>
                <span class="mega-card__desc"
                  >Asesoría, implementación, soporte y monitoreo</span
                >
              </a>

              <a class="mega-card" href="/servicios/cloud/" style="--i: 2">
                <span class="mega-card__media">
                  <img
                    src="/img/teamit-cloud-bloques.jpg"
                    alt=""
                    width="1400"
                    height="933"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
                <span class="mega-card__name">Cloud</span>
                <span class="mega-card__desc"
                  >Solución como servicio, nube y colocation</span
                >
              </a>

              <a class="mega-card" href="/servicios/computo-general/" style="--i: 3">
                <span class="mega-card__media">
                  <img
                    src="/img/teamit-computo.jpg"
                    alt=""
                    width="1400"
                    height="933"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
                <span class="mega-card__name">Cómputo general</span>
                <span class="mega-card__desc"
                  >Equipos de usuario final, impresión y accesorios</span
                >
              </a>
            </div>

            <div class="nav-mega__foot">
              <p>Se contratan por separado o como una sola solución operada por nosotros.</p>
              <div class="nav-mega__links">
                <a href="/como-lo-hacemos/">Cómo lo hacemos</a>
                <a href="/hablemos/">Hablemos</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-group" data-nav-group>
        <button class="nav-link nav-link--toggle" data-nav-toggle aria-expanded="false">
          Recursos
          <svg viewBox="0 0 10 6" aria-hidden="true"><path d="M1 1l4 4 4-4" /></svg>
        </button>
        <div class="nav-menu">
          <a href="/recursos/garantias/">
            <span>Garantías</span>
            <small>Radica tu solicitud</small>
          </a>
          <a href="/recursos/condiciones-de-garantias/">
            <span>Condiciones de garantías</span>
            <small>Procedimiento, cobertura y exclusiones</small>
          </a>
          <a href="/recursos/pqrs/">
            <span>PQRS</span>
            <small>Peticiones, quejas, reclamos y felicitaciones</small>
          </a>
          <a href="/recursos/recoleccion-de-residuos/">
            <span>Recolección de residuos</span>
            <small>Disposición de equipos en desuso</small>
          </a>
          <a href="/recursos/videos/">
            <span>Videos</span>
            <small>Nuestro canal</small>
          </a>
        </div>
      </div>

      <a class="nav-link" data-nav href="/como-lo-hacemos/">Cómo lo hacemos</a>
    </nav>

    <a class="btn btn-primary hidden lg:inline-flex" href="/hablemos/">Hablemos</a>

    <button
      data-menu-toggle
      class="grid h-11 w-11 place-items-center lg:hidden"
      aria-expanded="false"
      aria-controls="mobile-menu"
      aria-label="Abrir menú"
    >
      <span class="menu-icon" aria-hidden="true"><i></i><i></i></span>
    </button>
  </div>

  <div class="mobile-menu lg:hidden" id="mobile-menu">
    <div class="mobile-menu__inner">
      <nav class="shell grid gap-1 py-6" aria-label="Principal (móvil)">
        <a class="mobile-link" href="/#adn">Nuestro ADN</a>

        <p class="mobile-group">Servicios</p>
        <a class="mobile-sub" href="/servicios/soluciones-de-infraestructura/"
          >Soluciones de infraestructura</a
        >
        <a class="mobile-sub" href="/servicios/servicios-profesionales/"
          >Servicios profesionales</a
        >
        <a class="mobile-sub" href="/servicios/cloud/">Cloud</a>
        <a class="mobile-sub" href="/servicios/computo-general/">Cómputo general</a>

        <p class="mobile-group">Recursos</p>
        <a class="mobile-sub" href="/recursos/garantias/">Garantías</a>
        <a class="mobile-sub" href="/recursos/condiciones-de-garantias/"
          >Condiciones de garantías</a
        >
        <a class="mobile-sub" href="/recursos/pqrs/">PQRS</a>
        <a class="mobile-sub" href="/recursos/recoleccion-de-residuos/"
          >Recolección de residuos</a
        >
        <a class="mobile-sub" href="/recursos/videos/">Videos</a>

        <a class="mobile-link mt-2" href="/como-lo-hacemos/">Cómo lo hacemos</a>
        <a class="btn btn-primary mt-4" href="/hablemos/">Hablemos</a>
      </nav>
    </div>
  </div>
</header>


    <main id="contenido">
      <section class="page-hero">
        <div class="page-hero__media" aria-hidden="true">
          <img src="/img/teamit-cloud-bloques.jpg" alt="" />
        </div>
        <div class="shell">
          <nav class="crumbs" aria-label="Ruta">
            <a href="/">Inicio</a>
            <span aria-hidden="true">/</span>
            <a href="/#portafolio">Servicios</a>
            <span aria-hidden="true">/</span>
            <span>Cloud</span>
          </nav>
          <h1 class="t-h2 mt-7 max-w-[17ch]" data-reveal-lines>Cloud</h1>
          <p class="t-lead mt-6 max-w-[56ch] text-white/62">Modelos de solución como servicio, servicios de cloud y colocation. Creces sin comprar hierro y pagas por los recursos que realmente consumes.</p>
        </div>
      </section>

      <section class="section-light py-[clamp(72px,11vw,160px)]">
        <div class="shell">
          <p class="eyebrow text-indigo">Qué resuelve</p>
          <h2 class="t-h2 mt-5 max-w-[18ch]" data-reveal-lines>Lo que cambia al moverse a la nube</h2>
        </div>
        <div class="shell mt-[clamp(36px,5vw,64px)]">
          <ul class="spec-list" data-reveal-group>
          <li data-reveal>
            <div>
              <strong>Disponibilidad</strong>
            <p>La operación sigue en pie sin depender de un solo equipo.</p>
            </div>
          </li>
          <li data-reveal>
            <div>
              <strong>Crecimiento</strong>
            <p>Capacidad que sube y baja con la demanda real.</p>
            </div>
          </li>
          <li data-reveal>
            <div>
              <strong>Seguridad</strong>
            <p>Control de acceso y protección de la información.</p>
            </div>
          </li>
          <li data-reveal>
            <div>
              <strong>Optimización de recursos</strong>
            <p>Se paga por el consumo, no por la capacidad ociosa.</p>
            </div>
          </li>
          <li data-reveal>
            <div>
              <strong>Monitoreo</strong>
            <p>Visibilidad continua de lo que está corriendo.</p>
            </div>
          </li>
          <li data-reveal>
            <div>
              <strong>Soporte</strong>
            <p>Un equipo que responde cuando algo se sale de lo normal.</p>
            </div>
          </li>
          </ul>
        </div>
      </section>

      <section class="section-light border-t border-mist py-[clamp(64px,9vw,128px)]">
        <div class="shell">
          <p class="eyebrow text-indigo">Trabajamos con</p>
          <ul class="logo-grid mt-8" data-reveal-group>
            <li data-reveal>
              <img src="/partners/hewlett-packard.png" alt="Hewlett Packard Enterprise" loading="lazy" />
            </li>
            <li data-reveal>
              <img src="/partners/microsoft.png" alt="Microsoft" loading="lazy" />
            </li>
            <li data-reveal>
              <img src="/partners/veeam.png" alt="Veeam" loading="lazy" />
            </li>
          </ul>
        </div>
      </section>

      <section class="section-dark py-[clamp(64px,9vw,128px)]">
        <div class="shell">
          <p class="eyebrow text-blue-200">Seguir explorando</p>
          <h2 class="t-h2 mt-5 max-w-[16ch]" data-reveal-lines>Otras líneas del portafolio</h2>
          <div class="mt-[clamp(32px,5vw,56px)]" data-reveal-group>
          <a class="sibling" href="/servicios/soluciones-de-infraestructura/" data-reveal>
            <span class="sibling__name">Soluciones de infraestructura</span>
            <span class="sibling__go" aria-hidden="true">→</span>
          </a>
          <a class="sibling" href="/servicios/servicios-profesionales/" data-reveal>
            <span class="sibling__name">Servicios profesionales</span>
            <span class="sibling__go" aria-hidden="true">→</span>
          </a>
          <a class="sibling" href="/servicios/computo-general/" data-reveal>
            <span class="sibling__name">Cómputo general</span>
            <span class="sibling__go" aria-hidden="true">→</span>
          </a>
          </div>
        </div>
      </section>

      <section
  id="contacto"
  class="section-dark border-t border-white/10 py-[clamp(72px,11vw,160px)]"
>
  <div class="shell grid gap-[clamp(40px,7vw,96px)] lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)]">
    <div>
      <p class="eyebrow text-blue-200">Hablemos</p>
      <h2 class="t-h2 mt-5 max-w-[14ch]" data-reveal-lines>
        Cuéntanos qué necesitas operar
      </h2>
      <a class="btn btn-primary mt-8" href="/hablemos/">Armar mi solicitud</a>
      <p class="mt-4 max-w-[46ch] text-sm text-white/45">
        Seis preguntas y tienes una cotización en camino. O escríbenos directo.
      </p>
      <div class="mt-10 grid gap-5" data-reveal-group>
        <a class="contact-line" href="tel:+576046051070" data-reveal>
          <span class="contact-label">Fijo</span>
          <span class="contact-value">(+57 4) 605 10 70 · 200 42 63</span>
        </a>
        <a class="contact-line" href="tel:+573164538111" data-reveal>
          <span class="contact-label">Celular</span>
          <span class="contact-value">316 453 8111</span>
        </a>
        <a class="contact-line" href="mailto:info@teamit.com.co" data-reveal>
          <span class="contact-label">Correo</span>
          <span class="contact-value">info@teamit.com.co</span>
        </a>
      </div>
    </div>

    <div data-reveal-group>
      <p class="eyebrow text-white/40">Presencia</p>
      <ul class="mt-6 grid gap-px bg-white/10 sm:grid-cols-2">
        <li class="office" data-reveal>
          <h3 class="office-city">Envigado</h3>
          <p>Cl. 49 Sur #45a 300<br />Centro Empresarial S48 · Ofi. 1607</p>
        </li>
        <li class="office" data-reveal>
          <h3 class="office-city">Bogotá</h3>
          <p>Cra. 13 #96-67<br />Edificio AKORI · Ofi. 613</p>
        </li>
        <li class="office" data-reveal>
          <h3 class="office-city">Barranquilla</h3>
          <p>Cra. 53 #100-50<br />Centro Empresarial Blue Gardens · Ofi. 604</p>
        </li>
        <li class="office" data-reveal>
          <h3 class="office-city">Cali</h3>
          <p>Cl. 11 #100-121<br />Edificio Campestre Tower · Ofi. 606</p>
        </li>
      </ul>
    </div>
  </div>
</section>

    </main>

    <footer class="section-dark border-t border-white/10 py-14">
  <div class="shell grid gap-10 lg:grid-cols-[minmax(0,1fr)_auto]">
    <div>
      <img
        src="/brand/teamit-logo-dark.png"
        alt="Team It"
        width="450"
        height="270"
        class="h-11 w-auto"
      />
      <p class="mt-6 max-w-[44ch] text-sm text-white/45">
        Soluciones integrales de infraestructura tecnológica · Medellín, Colombia ·
        © <span data-year>2026</span> Team It S.A.S.
      </p>
    </div>

    <nav class="grid gap-10 sm:grid-cols-3" aria-label="Pie de página">
      <div>
        <p class="foot-title">Servicios</p>
        <a class="foot-link" href="/servicios/soluciones-de-infraestructura/"
          >Soluciones de infraestructura</a
        >
        <a class="foot-link" href="/servicios/servicios-profesionales/"
          >Servicios profesionales</a
        >
        <a class="foot-link" href="/servicios/cloud/">Cloud</a>
        <a class="foot-link" href="/servicios/computo-general/">Cómputo general</a>
      </div>
      <div>
        <p class="foot-title">Recursos</p>
        <a class="foot-link" href="/recursos/garantias/">Garantías</a>
        <a class="foot-link" href="/recursos/condiciones-de-garantias/"
          >Condiciones de garantías</a
        >
        <a class="foot-link" href="/recursos/pqrs/">PQRS</a>
        <a class="foot-link" href="/recursos/recoleccion-de-residuos/"
          >Recolección de residuos</a
        >
        <a class="foot-link" href="/recursos/videos/">Videos</a>
      </div>
      <div>
        <p class="foot-title">Compañía</p>
        <a class="foot-link" href="/#adn">Nuestro ADN</a>
        <a class="foot-link" href="/como-lo-hacemos/">Cómo lo hacemos</a>
        <a class="foot-link" href="/#politica">Política integral</a>
        <a class="foot-link" href="/#contacto">Contacto</a>
      </div>
    </nav>
  </div>
</footer>


  </body>
</html>

@endverbatim
