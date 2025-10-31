<?php

$usuario = "";
$contrasena = "";
// un arreglo que reciba el resultado del método del servicio web
$datos = array();

// VERIFICA QUE LLEGUEN LOS DATOS DE LA PAGINA ACCESO
if (!empty($_REQUEST['txtUsuario']) && !empty($_REQUEST['txtContrasena'])) {
	// TOMA LOS VALORES DE LAS CAJAS DE TEXTO
	$usuario    = htmlspecialchars($_REQUEST['txtUsuario']);
	$contrasena = htmlspecialchars($_REQUEST['txtContrasena']);

	// ######### HACE USO DEL SERVICIO WEB QUE ESTA PUBLICADO DE MANERA LOCAL ########
	$cliente = new SoapClient(null, array(
		'uri' => 'http://localhost/',
		'location' => 'http://localhost/proweb/2seguimieento/examen2proweb/servicioweb/servicioweb.php'
		//'location'=>'http://100.26.22.228/proweb/1erseg/practica5/servicioweb/servicioweb.php'
	));

	// SE EJECUTA EL MÉTODO DE ACCESO DEL SERVICIO WEB, PASANDO SUS PARAMETROS
	$datos = $cliente->sp_Acceso($usuario, $contrasena);
	// SE VERIFICA QUE EL USUARIO EXISTA
	if ((int)$datos[0]["BAN"] != 0) {
		// EL ARREGLO RECIBIDO SE CONVIERTE EN JSON PARA ENVIARLO DE SALIDA
		echo json_encode($datos);
		// ISSET-->VERIFICA SI EXISTEN LAS VARIABLES DE SESIÓN SINO LAS CREA
		if (!isset($_SESSION['cveUsuario'])) {
			$_SESSION['cveUsuario'] = $datos[1]["CVE"];
		}
		if (!isset($_SESSION['nomUsuario'])) {
			$_SESSION['nomUsuario'] = $datos[2]["NOM"];
		}
		if (!isset($_SESSION['usuUsuario'])) {
			$_SESSION['usuUsuario'] = $datos[3]["USU"];
		}
		if (!isset($_SESSION['rolUsuario'])) {
			$_SESSION['rolNombre'] = $datos[4]["ROL"];
		}

		echo "<script language='javascript'> alert('Bienvenido " . $_SESSION['nomUsuario'] . "');</script>";
		echo "<script language='javascript'>document.location.href='inicio.php';</script>";
	} else {
		// USUARIO NO ENCONTRADO
		echo json_encode($datos[0]);
		// ----------------------------------------
		if (
			isset($_SESSION["cveUsuario"]) &&
			isset($_SESSION["nomUsuario"]) &&
			isset($_SESSION["usuUsuario"]) &&
			isset($_SESSION["rolNombre"])
		) {
			session_start();
			session_unset();     // limpia variables de sesión
			session_destroy();   // destruye la sesión
		}
		// ----------------------------------------

		echo "<script language='javascript'>alert('Acceso Denegado');</script>";
		echo "<script language='javascript'>document.location.href='inicio.php?op=acceso';</script>";
	}
}
?>

<!-- Login centrado dentro del <main class="container"> del layout -->
<div class="row justify-content-center">
	<div class="col-12 col-sm-10 col-md-8 col-lg-5">
		<div class="card shadow-sm border-0 rounded-3">
			<div class="card-body p-4 p-md-5">
				<div class="text-center mb-4">
					<img src="imgproductos/mercadolibre.jpg" alt="MercadoLibre" class="rounded-2" style="width:72px;height:72px;object-fit:cover;">
					<h2 class="h3 mt-3 mb-1">Iniciar sesión</h2>
					<p class="text-secondary mb-0">Ingresa tu usuario y contraseña</p>
				</div>

				<form id="frmAcceso" method="POST" novalidate>
					<div class="mb-3">
						<label for="txtUsuario" class="form-label">Usuario</label>
						<input type="text" class="form-control" name="txtUsuario" id="txtUsuario" placeholder="Tu nombre de usuario" required autofocus>
					</div>

					<div class="mb-3">
						<label for="txtContrasena" class="form-label">Contraseña</label>
						<input type="password" class="form-control" name="txtContrasena" id="txtContrasena" placeholder="Tu contraseña" required>
					</div>

					<div class="d-grid gap-2">
						<button type="submit" class="btn btn-primary">Ingresar</button>
						<button type="button" class="btn btn-outline-primary" onclick="window.location.href='inicio.php'">Cancelar</button>
					</div>

					<p class="text-center text-secondary small mt-3 mb-0"><i class="bi bi-shield-check me-1"></i>Tus datos están protegidos</p>
				</form>
			</div>
		</div>
	</div>
</div>