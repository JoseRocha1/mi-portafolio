<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Rincón de la Bebida</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container"> <!-- Contenedor Principal -->
		<!-- Contenedoer Errores -->
		<?php if(!empty($errores)): ?>
			<div class="alert">
				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
				<strong><?php echo $errores; ?></strong>
			</div>
		<?php endif; ?>
		<!-- Contenedor Errores -->
		<div class="login"> <!-- Contenedor Login -->
			<h2>Bienvenido</h2>
			<form method="POST"> <!-- Formulario -->
				<div class="group_1"> <!-- Grupo 1 -->
					<input type="email" name="correo" class="form-control" placeholder="Correo Electrónico">
				</div> <!-- Grupo 1 -->
				<div class="group_2"> <!-- Grupo 2 -->
					<input type="password" name="contra" class="form-control" placeholder="Contraseña">
				</div> <!-- Grupo 2 -->
				<div class="botones"> <!-- Botón -->
					<input type="submit" name="sent" class="button" value="Login">
				</div> <!-- Botón -->
			</form> <!-- Formulario -->
			<div class="enlaces"> <!-- Enlaces -->
				<!--<p><a href="#">¿Olvidaste la contraseña?</a></p>-->
				<p><a href="registro.php">¿No tienes cuenta? Registrarse</a></p>
			</div> <!-- Enlaces -->
		</div> <!-- Contenedor Login -->
	</div> <!-- Contenedor Principal -->
</body>
</html>