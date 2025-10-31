<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<footer class="ml-footer position-relative mt-auto" style="margin-top: 60px; min-height: 400px;">
  <!-- Olas decorativas estilo MercadoLibre -->
  <div class="position-absolute w-100" style="top: 0; left: 0; overflow: hidden; height: 80px; pointer-events: none; z-index: 1;">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-100 h-100" style="transform: translateY(-50%);">

      <path d="M0,0 C300,100 900,0 1200,100 L1200,120 L0,120 Z" fill="rgba(255,230,0,.35)">
        <animate attributeName="d" dur="12s" repeatCount="indefinite"
          values="M0,0 C300,100 900,0 1200,100 L1200,120 L0,120 Z;
                  M0,0 C250,80 950,40 1200,90 L1200,120 L0,120 Z;
                  M0,0 C300,100 900,0 1200,100 L1200,120 L0,120 Z" />
      </path>
      <path d="M0,10 C260,90 940,20 1200,95 L1200,120 L0,120 Z" fill="rgba(52,131,250,.25)">
        <animate attributeName="d" dur="10s" repeatCount="indefinite"
          values="M0,10 C260,90 940,20 1200,95 L1200,120 L0,120 Z;
                  M0,10 C220,70 980,50 1200,85 L1200,120 L0,120 Z;
                  M0,10 C260,90 940,20 1200,95 L1200,120 L0,120 Z" />
      </path>
    </svg>
  </div>

  <div class="container" style="padding-top: 100px; padding-bottom: 30px; position: relative; z-index: 2;">
    <div class="row g-4 mb-4">
      <div class="col-12 col-md-6 col-lg-3">
        <h5 class="fw-bold text-white">Sobre el sitio</h5>
        <p class="text-light mb-3">
          Material de la materia <strong>Programación Web (7°, 8° ISC)</strong>. Prácticas con PHP, HTML, CSS, JS, MySQL <strong>(MercadoLibre Style).</strong> 21200591
        </p>
        <div class="developers-section mb-3">
          <div class="my_name">
            <i class="bi bi-code-slash me-1"></i>
            ALEF DAVID ESPARZA DÍAZ
          </div>
          <div class="my_name my_name_secondary">
            <i class="bi bi-code-slash me-1"></i>
            ANGEL EDUARDO LUGO LÓPEZ
          </div>
        </div>
        <div class="d-flex gap-2">
          <a class="btn btn-outline-light btn-sm rounded-3" href="#" title="GitHub"><i class="bi bi-github"></i></a>
          <a class="btn btn-outline-light btn-sm rounded-3" href="#" title="YouTube"><i class="bi bi-youtube"></i></a>
          <a class="btn btn-outline-light btn-sm rounded-3" href="#" title="X"><i class="bi bi-twitter-x"></i></a>
          <a class="btn btn-outline-light btn-sm rounded-3" href="#" title="Facebook"><i class="bi bi-facebook"></i></a>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <h5 class="fw-bold text-white">Enlaces rápidos</h5>
        <ul class="list-unstyled">
          <li class="mb-1"><a class="link-light link-opacity-75-hover text-decoration-none" href="inicio.php">Inicio</a></li>
          <li class="mb-1"><a class="link-light link-opacity-75-hover text-decoration-none" href="inicio.php?op=rptproductos">Productos</a></li>

          <li class="mb-1"><a class="link-light link-opacity-75-hover text-decoration-none" href="inicio.php?op=acceso">Mi sesión</a></li>
          <li class="mb-1"><a class="link-light link-opacity-75-hover text-decoration-none" href="#" id="pfGoTopLink">Volver arriba</a></li>
        </ul>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <h5 class="fw-bold text-white">Contacto</h5>
        <ul class="list-unstyled text-light mb-0">
          <li>Instituto Tecnológico de Pachuca, Hidalgo</li>
          <li>Email: contacto@pachuca.tecnm.mx</li>
          <li>Tel: (777) 343 2670</li>
        </ul>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 shadow-sm ml-card-footer">
          <div class="card-body">
            <h6 class="fw-bold mb-2 text-ml-blue">Boletín</h6>
            <p class="text-secondary small mb-3">Recibe avisos de prácticas, datasets y actividades semanales.</p>
            <form class="needs-validation" novalidate onsubmit="event.preventDefault(); pfNewsletterThanks();">
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Correo institucional" required>
              </div>
              <button class="btn btn-ml-yellow w-100 mt-2 fw-semibold text-dark" type="submit">
                Suscribirme <i class="bi bi-check2-circle ms-1"></i>
              </button>
              <div class="invalid-feedback d-block small mt-2" style="display:none;" id="pfEmailError">
                Por favor, ingresa un correo institucional válido.
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <hr class="border-light my-4">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pb-4">
      <span class="text-light small">© <?php echo date('Y'); ?> Programación Web • ISC — Hecho con 💻 + ☕☕☕</span>
      <div class="d-flex gap-3 small mt-2 mt-md-0">
        <a href="#" class="link-light link-opacity-75-hover text-decoration-none">Términos</a>
        <a href="#" class="link-light link-opacity-75-hover text-decoration-none">Privacidad</a>
      </div>
    </div>
  </div>

  <!-- Botón volver arriba estilo MercadoLibre -->
  <button id="pfTopBtn" class="btn btn-ml-yellow text-dark rounded-circle shadow-lg position-fixed" type="button"
    style="right: 16px; bottom: 16px; width: 50px; height: 50px; transform: translateY(120%); transition:.25s ease; font-weight: bold;">
    <i class="bi bi-arrow-up"></i>
  </button>
</footer>

<style>
  /* Footer con degradado MercadoLibre */
  .ml-footer {
    background: linear-gradient(135deg, #2D3277 0%, #3483FA 100%);
    color: white;
  }

  /* Colores de MercadoLibre */
  .text-ml-blue {
    color: #3483FA !important;
  }

  .btn-ml-blue {
    background-color: #3483FA;
    border: none;
  }

  .btn-ml-blue:hover {
    background-color: #2968C8;
  }

  .btn-ml-yellow {
    background-color: #FFE600;
    border: none;
    font-weight: 600;
  }

  .btn-ml-yellow:hover {
    background-color: #FFC700;
    transform: scale(1.05);
  }

  .ml-card-footer {
    border: 2px solid #FFE600;
    transition: all 0.3s ease;
    background: white;
  }

  .ml-card-footer:hover {
    border-color: #FFC700;
    box-shadow: 0 8px 24px rgba(255, 230, 0, .4) !important;
    transform: translateY(-4px);
  }

  .my_name {
    color: #FFE600;
    padding: 0;
    margin-bottom: 6px;
    font-weight: 600;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
  }

  .my_name:hover {
    color: #FFF;
    transform: translateX(5px);
    text-shadow: 0 0 10px rgba(255, 230, 0, .5);
  }

  .my_name_secondary {
    color: #A0D8FF;
  }

  .my_name_secondary:hover {
    color: #FFE600;
  }

  .developers-section {
    background: rgba(255, 230, 0, 0.1);
    border-left: 3px solid #FFE600;
    padding: 12px;
    border-radius: 6px;
    backdrop-filter: blur(10px);
  }

  /* Aparición del botón arriba */
  #pfTopBtn.show {
    transform: translateY(0) !important;
  }

  #pfTopBtn:hover {
    transform: translateY(0) scale(1.1) !important;
  }

  /* Suaves apariciones */
  .card,
  .btn,
  .nav-link {
    transition: transform .2s ease, box-shadow .2s ease;
  }

  .card:hover {
    transform: translateY(-2px);
  }
</style>

<script>
  // Newsletter dummy
  function pfNewsletterThanks() {
    const err = document.getElementById('pfEmailError');
    err.style.display = 'none';
    alert('¡Gracias por suscribirte!'); // aquí podrías hacer fetch() a tu endpoint
  }
  // Volver arriba
  (function() {
    const topBtn = document.getElementById('pfTopBtn');
    const goTopLink = document.getElementById('pfGoTopLink');

    const onScroll = () => {
      if (window.scrollY > 280) topBtn.classList.add('show');
      else topBtn.classList.remove('show');
    };
    window.addEventListener('scroll', onScroll);
    topBtn.addEventListener('click', () => window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
    goTopLink?.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
    onScroll();
  })();
</script>