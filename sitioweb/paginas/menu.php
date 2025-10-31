<?php
// Detecta la página actual para marcar el link activo automáticamente
$current = basename($_SERVER['PHP_SELF']);
function isActive($page, $current)
{
  return $page === $current ? 'active' : '';
}
?>
<!-- Bootstrap 5 (si ya lo cargas en tu layout, puedes quitar estas 2 líneas) -->
<!--<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" -->
<!--<link href="../bootstrap/css/bootstrap-icons.css" rel="stylesheet" -->

<nav class="navbar navbar-expand-lg navbar-light bg-ml-yellow sticky-top shadow-sm pf-nav">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="inicio.php">
      <img src="imgproductos/mercadolibre.jpg" alt="MercadoLibre" class="ml-logo">
      <strong class="text-dark">Programación Web • ISC</strong>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pfNavbar"
      aria-controls="pfNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="pfNavbar">
      <ul class="navbar-nav ms-auto align-items-lg-center mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link position-relative text-dark <?= isActive('inicio.php', $current) ?>" href="inicio.php">
            <i class="bi bi-house-door me-1"></i>Inicio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link position-relative text-dark <?= isActive('rptproductos.php', $current) ?>" href="inicio.php?op=rptproductos">
            <i class="bi bi-box-seam me-1"></i>Productos
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link position-relative text-dark <?= isActive('acceso.php', $current) ?>" href="inicio.php?op=acceso">
            <i class="bi bi-person-circle me-1"></i>Mi sesión
          </a>
        </li>
        <?php
        if (isset($_SESSION['nomUsuario'])) {

        ?>
          <li class="nav-item">
            <a class="nav-link position-relative text-dark <?= isActive('cerrarsesion.php', $current) ?>" href="inicio.php?op=cerrarsesion">
              <i class="bi bi-box-arrow-right me-1"></i>
              (<?php echo $_SESSION['nomUsuario']; ?>)
            </a>
          </li>
        <?php

        }

        ?>
        <li class="nav-item ms-lg-2">
          <a class="btn btn-ml-blue fw-semibold px-3 text-white" href="contacto.php">
            ¡Comencemos! <i class="bi bi-cart-check ms-1"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Colores de MercadoLibre */
  .bg-ml-yellow {
    background-color: #FFE600 !important;
  }

  .btn-ml-blue {
    background-color: #3483FA;
    border: none;
    border-radius: .25rem;
    transition: background-color .2s ease;
  }

  .btn-ml-blue:hover {
    background-color: #2968C8;
  }

  .ml-logo {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .15);
  }

  .pf-nav .nav-link {
    --underline: 0;
    transition: color .2s ease, transform .2s ease;
    font-weight: 500;
  }

  .pf-nav .nav-link:hover {
    transform: translateY(-1px);
    color: #3483FA !important;
  }

  .pf-nav .nav-link::after {
    content: "";
    position: absolute;
    left: .5rem;
    right: .5rem;
    bottom: .3rem;
    height: 3px;
    background: #3483FA;
    transform: scaleX(var(--underline));
    transform-origin: right;
    transition: transform .25s ease;
    border-radius: 2px;
  }

  .pf-nav .nav-link:hover::after {
    --underline: 1;
    transform-origin: left;
  }

  .pf-nav .nav-link.active {
    color: #3483FA !important;
  }

  .pf-nav .nav-link.active::after {
    --underline: 1;
  }
</style>

<!-- Bootstrap JS (si ya lo cargas en tu layout, puedes quitar esta línea) -->
<!-- <script src="../bootstrap/js/bootstrap.bundle.min.js"></script -->