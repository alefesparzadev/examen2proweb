<?php
// INICIAR EL USO DE SESION DEL USUARIO
session_start();

//isset verifica que exista la variable op, posteriormente se convierte
//todo a minúsculas
$pagina = isset($_GET['op']) ? strtolower($_GET['op']) : 'bienvenida';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web • ISC</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    //se genera la sección del menú
    require_once 'paginas/menu.php';
    ?>

    <main class="container py-4 flex-grow-1">
        <?php
        require_once 'paginas/' . $pagina . '.php';
        ?>
    </main>

    <?php
    //se crea la sección del pie de página
    require_once 'paginas/piepag.php';
    ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/popper.js"></script>
</body>

</html>