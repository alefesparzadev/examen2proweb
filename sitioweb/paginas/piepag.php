<!-- Bootstrap Icons (si ya lo cargas en tu layout, puedes quitar esta línea) -->
<!-- link href="../bootstrap/css/bootstrap-icons.css" rel="stylesheet" -->

<footer class="bg-light text-dark position-relative" style="margin-top: 0; padding-top: 0; border-top: 3px solid #FFE600;">
  <!-- Olas decorativas estilo MercadoLibre -->
  <div class="position-absolute w-100" style="top: 0; left: 0; overflow: hidden; height: 80px; pointer-events: none; z-index: 0;">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-100 h-100" style="transform: translateY(-100%);">

      <path d="M0,0 C300,100 900,0 1200,100 L1200,120 L0,120 Z" fill="rgba(255,230,0,.25)">
        <animate attributeName="d" dur="12s" repeatCount="indefinite"
          values="M0,0 C300,100 900,0 1200,100 L1200,120 L0,120 Z;
                  M0,0 C250,80 950,40 1200,90 L1200,120 L0,120 Z;
                  M0,0 C300,100 900,0 1200,100 L1200,120 L0,120 Z" />
      </path>
      <path d="M0,10 C260,90 940,20 1200,95 L1200,120 L0,120 Z" fill="rgba(52,131,250,.18)">
        <animate attributeName="d" dur="10s" repeatCount="indefinite"
          values="M0,10 C260,90 940,20 1200,95 L1200,120 L0,120 Z;
                  M0,10 C220,70 980,50 1200,85 L1200,120 L0,120 Z;
                  M0,10 C260,90 940,20 1200,95 L1200,120 L0,120 Z" />
      </path>
    </svg>
  </div>

  <div class="container" style="padding-top: 100px; position: relative; z-index: 1;">
    <div class="row g-4">
      <div class="col-12 col-md-6 col-lg-3">
        <h5 class="fw-bold">Sobre el sitio</h5>
        <p class="text-secondary mb-3">
          Material de la materia <strong>Programación Web (7°, 8° ISC)</strong>. Prácticas con PHP, HTML, CSS, JS, MySQL <strong>(Friendly Web Design).</strong> 21200591
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
        <h5 class="fw-bold">Enlaces rápidos</h5>
        <ul class="list-unstyled">
          <li class="mb-1"><a class="link-light link-opacity-75-hover text-decoration-none" href="inicio.php">Inicio</a></li>
          <li class="mb-1"><a class="link-light link-opacity-75-hover text-decoration-none" href="inicio.php?op=rptproductos">Productos</a></li>

          <li class="mb-1"><a class="link-light link-opacity-75-hover text-decoration-none" href="inicio.php?op=acceso">Mi sesión</a></li>
          <li class="mb-1"><a class="link-light link-opacity-75-hover text-decoration-none" href="#" id="pfGoTopLink">Volver arriba</a></li>
        </ul>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <h5 class="fw-bold">Contacto</h5>
        <ul class="list-unstyled text-secondary mb-0">
          <li>Instituto Tecnológico de Pachuca, Hidalgo</li>
          <li>Email: contacto@pachuca.tecnm.mx</li>
          <li>Tel: (777) 343 2670</li>
        </ul>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="card bg-body-tertiary border-0 shadow-sm">
          <div class="card-body">
            <h6 class="fw-bold mb-2">Boletín</h6>
            <p class="text-secondary small mb-3">Recibe avisos de prácticas, datasets y actividades semanales.</p>
            <form class="needs-validation" novalidate onsubmit="event.preventDefault(); pfNewsletterThanks();">
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Correo institucional" required>
              </div>
              <button class="btn btn-gradient w-100 mt-2 fw-semibold" type="submit">
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

    <hr class="border-secondary-subtle my-4">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pb-4">
      <span class="text-secondary small">© <?php echo date('Y'); ?> Programación Web • ISC — Hecho con 💻 + ☕☕☕</span>
      <div class="d-flex gap-3 small mt-2 mt-md-0">
        <a href="#" class="link-light link-opacity-75-hover text-decoration-none">Términos</a>
        <a href="#" class="link-light link-opacity-75-hover text-decoration-none">Privacidad</a>
      </div>
    </div>
  </div>

  <!-- Botón volver arriba -->
  <button id="pfTopBtn" class="btn btn-light rounded-4 shadow position-fixed" type="button"
    style="right: 16px; bottom: 16px; transform: translateY(120%); transition:.25s ease;">
    <i class="bi bi-arrow-up"></i>
  </button>
</footer>

<style>
  .my_name {
    color: #22d3ee;
    padding: 0;
    margin-bottom: 6px;
    font-weight: 600;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
  }

  .my_name:hover {
    color: #34d399;
    transform: translateX(5px);
  }

  .my_name_secondary {
    color: #a78bfa;
  }

  .my_name_secondary:hover {
    color: #22d3ee;
  }

  .developers-section {
    background: rgba(34, 211, 238, 0.05);
    border-left: 3px solid #22d3ee;
    padding: 12px;
    border-radius: 6px;
  }

  .btn-gradient {
    background: linear-gradient(90deg, #22d3ee, #34d399);
    color: #0b1020;
    border: none;
  }

  .btn-gradient:hover {
    filter: brightness(1.07);
  }

  /* Aparición del botón arriba */
  #pfTopBtn.show {
    transform: translateY(0) !important;
  }

  /* Suaves apariciones */
  .card,
  .btn,
  .nav-link {
    transition: transform .2s ease, box-shadow .2s ease;
  }

  .card:hover {
    transform: translateY(-2px);
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, .15) !important;
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