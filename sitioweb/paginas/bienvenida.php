<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" -->
        <style>
            .container{
                display: flex;
                justify-content: center;
            }
            .presentation{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 10px;
            }
            .information{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-weight: bolder;
                font-size: 1.3rem;
            }
        </style>
    <title>Practica 5</title>
</head>

<body>
    <div class="container">
        <form style="background-color:#FFFFFF;">
            <div class="presentation">
            <?php
            if (isset($_SESSION['rolNombre']) == "ADMINISTRADOR") {
                if ($_SESSION['rolNombre'] == "ADMINISTRADOR") {
            ?>
                        <img src="imagenes/usuarios/usuAdmin.png" alt="Administrador"> <br>                   
                <?php
                }
                if ($_SESSION['rolNombre'] != "ADMINISTRADOR") {
                ?>                    
                        <img src="imagenes/usuarios/usuUser.png" alt="Administrador"> <br>
                <?php
                }
                ?>
                <div class="information">
               <p>Nombre: <?php echo $_SESSION['nomUsuario']; ?></p> 
                <p>Usuario: <?php echo $_SESSION['usuUsuario']; ?> </p>
                <p>Rol: <?php echo $_SESSION['rolNombre']; ?></p>
                </div>
                </div>
            <?php
            } else {
            ?>
                <div>
                    <center>
                        <br>
                        <h1>¡Bienvenido(a)!</h1>
                        Haz click en la opción que requieres ....
                        <br><br>
                    </center>
                </div>
            <?php
            }
            ?>
        </form>
    </div>
</body>

</html>