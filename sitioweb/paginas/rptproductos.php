<?php

$totalProductos = 0;
//######### HACE USO DEL SERVICIO WEB QUE ESTA PUBLICADO DE MANERA LOCAL ########		 
//######### HACE USO DEL SERVICIO WEB QUE ESTA PUBLICADO DE MANERA LOCAL ########		 
$cliente = new SoapClient(null, array(
  'uri' => 'http://localhost/',
  'location' => 'http://98.84.225.216/proweb/examen2proweb/servicioweb/servicioweb.php'
));
//'location'=>'http://100.26.22.228/proweb/1erseg/practica5/servicioweb/servicioweb.php'));	

//SE EJECUTA UN MÉTODO DEL SERVICIO WEB, PASANDO SUS PARAMETROS
$consulta = $cliente->VwRptProductos();

$totalProductos = 6;  //PARA ESTE EJEMPLO SE DEJÓ FIJO MOSTRAR POR RENGLÓN 6 PRODUCTOS

?>

<html>

<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilo MercadoLibre */
    .ml-product-card {
      border: 1px solid #e8e8e8;
      border-radius: 8px;
      padding: 16px;
      text-align: center;
      transition: all 0.3s ease;
      background: white;
      height: 100%;
      display: flex;
      flex-direction: column;
      position: relative;
    }

    .ml-product-card:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
      transform: translateY(-4px);
      border-color: #3483FA;
    }

    .ml-product-card img {
      border-radius: 8px;
      object-fit: cover;
      margin-bottom: 12px;
      width: 100%;
      height: 165px;
    }

    .ml-product-name {
      color: #333;
      font-size: 14px;
      font-weight: 400;
      margin-bottom: 8px;
      min-height: 40px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      line-height: 1.4;
    }

    .ml-product-description {
      color: #666;
      font-size: 12px;
      margin-bottom: 12px;
      min-height: 36px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      line-height: 1.3;
      flex-grow: 1;
    }

    .ml-product-price {
      color: #333;
      font-size: 24px;
      font-weight: 400;
      margin-bottom: 4px;
      margin-top: auto;
    }

    .ml-product-discount {
      color: #00a650;
      font-size: 14px;
      font-weight: 600;
    }

    .ml-free-shipping {
      color: #00a650;
      font-size: 14px;
      font-weight: 600;
      margin-top: 8px;
    }

    .ml-product-badge {
      position: absolute;
      top: 12px;
      left: 12px;
      background: #FFE600;
      color: #333;
      padding: 4px 8px;
      border-radius: 4px;
      font-size: 11px;
      font-weight: 600;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
    }

    .ml-header {
      background: linear-gradient(135deg, #FFE600 0%, #FFF 100%);
      padding: 24px;
      border-radius: 12px;
      margin-bottom: 32px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
    }

    .ml-header h2 {
      color: #3483FA;
      font-weight: 600;
      margin: 0;
    }

    @media (max-width: 1311px) {
      .ml-product-card img {
        height: 140px;
      }
    }

    @media (max-width: 768px) {
      .ml-product-card img {
        height: 180px;
      }

      .ml-product-price {
        font-size: 20px;
      }
    }
  </style>
</head>

<body>

  <form name="frmProductos" method="POST">
    <div class="container">
      <div class="ml-header">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2><i class="bi bi-box-seam me-2"></i>Productos disponibles</h2>
          </div>
          <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <a href='?op=bienvenida' class='btn btn-outline-primary' title='Regresar al inicio'>
              <i class="bi bi-house-door me-1"></i>Regresar a inicio
            </a>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6 g-3">
        <?php
        for ($rr = 0; $rr < count($consulta); $rr++) {
          echo "<div class='col'>";
          echo "<a href='?op=rptproductos' class='text-decoration-none'>";
          echo "<div class='ml-product-card'>";

          // Badge opcional si hay descuento o promoción
          if ($rr % 3 == 0) { // Ejemplo: cada 3er producto tiene badge
            echo "<span class='ml-product-badge'>Oferta</span>";
          }

          echo "<img src='" . $consulta[$rr]['foto'] . "' alt='" . htmlspecialchars($consulta[$rr]['nombre']) . "' />";
          echo "<div class='ml-product-name'><strong>" . htmlspecialchars($consulta[$rr]['nombre']) . "</strong></div>";

          // Descripción del producto
          if (!empty($consulta[$rr]['descripcion'])) {
            echo "<div class='ml-product-description'>" . htmlspecialchars($consulta[$rr]['descripcion']) . "</div>";
          }

          // Precio
          echo "<div class='ml-product-price'>$" . number_format($consulta[$rr]['precio'], 2) . "</div>";

          // Envío gratis con icono Bootstrap
          echo "<div class='ml-free-shipping'><i class='bi bi-truck me-1'></i>Envío gratis</div>";

          echo "</div>";
          echo "</a>";
          echo "</div>";
        }
        ?>
      </div>
    </div>

  </form>
</body>

</html>