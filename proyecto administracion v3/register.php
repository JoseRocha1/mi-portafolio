<html>
<head>
	<meta charset="utf-8">
	<title>Mobile Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php require 'header_basic.php'; ?> <!-- Header -->

	<div class="container"> <!-- Contenedor Principal -->
		<div class="formulario"><br> <!-- Contenedor Secundario -->
			<button type="button" class="btn btn-outline-secondary" onClick="history.back()"><i class="fas fa-arrow-left"></i></button>
			<div class="container-sm"><br> <!-- Contenedor Formulario -->
				<h2>Registrarse</h2><br>
				<form method="POST"> <!-- Formulario -->
					<div class="row g-2">
						<div class="col-md">
							<label>Nombre(s)</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="col-md">
							<label>Apellidos</label>
							<input type="text" name="last" class="form-control">
						</div>
					</div><br>
					<div class="mb-3">
						<label>Correo Electrónio</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="row g-2">
						<div class="col-md">
							<label>Contraseña</label>
							<input type="password" name="pass" class="form-control">
						</div>
						<div class="col-md">
							<label>Confirmar contraseña</label>
							<input type="password" name="rep_pass" class="form-control">
						</div>
					</div><br>
					<div class="cent">
						<button type="submit" class="btn btn-primary">Crear cuenta</button>
					</div>
				</form><br> <!-- Formulario -->
				<div class="cent_2">
					<a href="login.php" class="link">¿Ya tienes cuenta?</a><br><br>
				</div>
			</div> <!-- Contenedor Formulario -->
		</div><br> <!-- Contenedor Secundario -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias JS -->
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>