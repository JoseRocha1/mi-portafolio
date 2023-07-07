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
					<a href="profile.php" class="nav-link active">Información básica</a>
				</li>
				<li class="nav-item">
					<a href="security.php" class="nav-link">Seguridad</a>
				</li>
			</ul> <!-- Menú Secundario -->
			<div class="container-md"><br> <!-- Contenedor Perfil -->
				<a href="setting.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i></a>
				<h2>Perfil</h2><br>
				<form method="POST">
					<div id="preview">
						<img src="imagenes/user.png" alt="..." id="photoSelect" class="card-img-top">
					</div>
					<input type="file" name="img" id="loadPhoto" class="form-control-file"><br>
					<div class="mb-3">
						<label>Nombre(s)</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div clas="mb-3">
						<label>Apellidos</label>
						<input type="text" name="last_name" class="form-control">
					</div>
					<div class="mb-3">
						<label>Fecha de nacimiento</label>
						<input type="date" name="born" class="form-control">
					</div>
					<h5>Género</h5>
					<div class="form-check form-check-inline">
						<input type="radio" name="option" value="Hombre">
						<label class="form-check-label">Hombre</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" name="option" value="Mujer">
						<label class="form-check-label">Mujer</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" name="option" value="Otro">
						<label class="form-check-label">Otro</label>
					</div><br><br>
					<button type="submit" class="btn btn-primary">Guardar</button><br>
					<div class="align_cart">
						<a href="#">Eliminar cuenta</a>
					</div>
				</form>
			</div><br><br> <!-- Contenedor Perfil -->
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