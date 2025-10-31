<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" -->
    <style>
        body {
            background: linear-gradient(135deg, #FFE600 0%, #FFF 50%, #3483FA 100%);
            min-height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .ml-welcome-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .12);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            border: 2px solid #FFE600;
        }

        .presentation {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .presentation img {
            border-radius: 50%;
            border: 4px solid #3483FA;
            box-shadow: 0 4px 12px rgba(52, 131, 250, .3);
            margin-bottom: 20px;
        }

        .information {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: bolder;
            font-size: 1.3rem;
            color: #333;
            background: linear-gradient(135deg, rgba(255, 230, 0, .1), rgba(52, 131, 250, .1));
            padding: 20px;
            border-radius: 12px;
            width: 100%;
        }

        .information p {
            margin: 8px 0;
            padding: 8px 16px;
            background: white;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .05);
        }

        .ml-welcome-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .ml-welcome-header h1 {
            color: #3483FA;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .ml-welcome-header p {
            color: #666;
            font-size: 1.1rem;
        }

        .ml-badge {
            background: linear-gradient(135deg, #3483FA, #FFE600);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-top: 10px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, .2);
        }
    </style>
    <title>Bienvenida</title>
</head>

<body>
    <div class="container">
        <form class="ml-welcome-card">
            <div class="presentation">
                <?php
                if (isset($_SESSION['rolNombre']) == "ADMINISTRADOR") {
                    if ($_SESSION['rolNombre'] == "ADMINISTRADOR") {
                ?>
                        <img src="imgproductos/usuarios/usuAdmin.png" alt="Administrador" width="120" height="120"> <br>
                    <?php
                    }
                    if ($_SESSION['rolNombre'] != "ADMINISTRADOR") {
                    ?>
                        <img src="imgproductos/usuarios/usuUser.png" alt="Usuario" width="120" height="120"> <br>
                    <?php
                    }
                    ?>
                    <div class="information">
                        <p><i class="bi bi-person-circle me-2"></i><strong>Nombre:</strong> <?php echo $_SESSION['nomUsuario']; ?></p>
                        <p><i class="bi bi-person-badge me-2"></i><strong>Usuario:</strong> <?php echo $_SESSION['usuUsuario']; ?> </p>
                        <p><i class="bi bi-shield-check me-2"></i><strong>Rol:</strong> <?php echo $_SESSION['rolNombre']; ?></p>
                    </div>
                    <span class="ml-badge">
                        <i class="bi bi-star-fill me-1"></i>Sesión activa
                    </span>
            </div>
        <?php
                } else {
        ?>
            <div class="ml-welcome-header">
                <h1><i class="bi bi-cart-check-fill me-2"></i>¡Bienvenido(a)!</h1>
                <p>Haz click en la opción que requieres</p>
                <img src="imgproductos/mercadolibre.jpg" alt="MercadoLibre" style="max-width: 200px; border-radius: 12px; margin-top: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, .15);">
            </div>
        <?php
                }
        ?>
        </form>
    </div>
</body>

</html>