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
		<div class="conf"><br><br> <!-- Contenedor Secundario -->
			<ul class="nav nav-tabs"> <!-- Menú Secundario -->
				<li class="nav-item">
					<a href="profile.php" class="nav-link">Información básica</a>
				</li>
				<li class="nav-item">
					<a href="security.php" class="nav-link active">Seguridad</a>
				</li>
			</ul> <!-- Menú Secundario -->
			<div class="container-md"><br> <!-- Contenedor Contraseña -->
				<a href="setting.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i></a>
				<h2>Contraseña</h2>
				<form method="POST">
					<div class="mb-3">
						<label>Contraseña</label>
						<input type="password" name="pwd_old" class="form-control">
					</div>
					<div class="mb-3">
						<label>Nueva contraseña</label>
						<input type="password" name="pwd_new" class="form-control">
					</div>
					<div class="mb-3">
						<label>Vuelve a repetir la nueva contraseña</label>
						<input type="password" name="pwd_new_2" class="form-control">
					</div><br>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</form><br>
			</div><br><br> <!-- Contenedor Contraseña -->
		</div> <!-- Contenedor Secundario -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias JS -->
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/hidden.js"></script>
	<script type="text/javascript" src="js/prevImg.js"></script>
</body>
</html>