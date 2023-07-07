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
		<!-- Contenedor Errores -->
		<?php if(!empty($errores)): ?>
			<div class="alert">
				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
				<strong><?php echo $errores; ?></strong>
			</div>
		<?php endif; ?>
		<!-- Contenedor Errores -->
		<div class="register"> <!-- Contenedor Registro -->
			<h2>Registrate</h2>
			<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> <!-- Formulario -->
				<div class="form-group"> <!-- Conjunto 1 -->
					<div class="group_3"> <!-- Grupo 3 -->
						<input type="text" name="nombre" class="form-control" placeholder="Nombre(s)">
					</div> <!-- Grupo 3 -->
					<div class="group_4"> <!-- Grupo 4 -->
						<input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
					</div><br><br> <!-- Grupo 4 -->
				</div> <!-- Conjunto 1 -->
				<div class="group_5"> <!-- Grupo 5 -->
					<input type="email" name="correo" class="form-control" placeholder="Correo electrónico">
				</div> <!-- Grupo 5 -->
				<div class="form-group"> <!-- Conjunto 2 -->
					<div class="group_6"> <!-- Grupo 6 -->
						<input type="password" name="cont_1" class="form-control" placeholder="Contraseña">
					</div> <!-- Grupo 6 -->
					<div class="group_7"> <!-- Grupo 7 -->
						<input type="password" name="cont_2" class="form-control" placeholder="Repetir contraseña">
					</div> <!-- Grupo 7 -->
				</div><br><br> <!-- Conjunto 2 -->
				<div class="group_8"> <!-- Grupo 8 -->
					<h5 id="birthday">Fecha de nacimiento</h5>
					<input type="date" name="cumple" id="birthday" class="form-control">
				</div> <!-- Grupo 8 -->
				<div class="group_9"> <!-- Grupo 9 -->
					<h5>Género</h5>
					<input type="radio" name="genero" id="female" value="mujer">
					<label for="female">Mujer</label>
					<input type="radio" name="genero" id="male" value="hombre">
					<label for="male">Hombre</label>
					<input type="radio" name="genero" id="other" value="otro">
					<label for="other">Otro</label>
				</div> <!-- Grupo 9 -->
				<div class="group_10"> <!-- Grupo 10 -->
					<h5>Credencial de elector</h5> 
					<div id="preview"> <!-- Vista previa de imagén -->
						<img src="#" alt="ID" id="photoSelect">
					</div> <!-- Vista previa de imagén -->
					<input type="file" name="credencial" accept="image/png, image/jpg, image/jpeg," id="loadPhoto">
				</div> <!-- Grupo 10 -->
				<input type="hidden" name="rol" value="2">
				<div class="group_11"> <!-- Grupo 11 -->
					<label><input type="checkbox" name="edad" class="form-control" value="Mayor de edad" required> Acepto que tengo mas de 18 años</label>
				</div> <!-- Grupo 11 -->
				<div class="botones"> <!-- Botón -->
					<input type="submit" name="sent" class="button" value="Registrarse">
				</div> <!-- Botón -->
			</form> <!-- Formulario -->
			<div class="enlaces"> <!-- Enlaces -->
				<p><a href="login.php">¿Ya te registraste? Iniciar Sesión</a></p>
			</div> <!-- Enlaces -->
		</div> <!-- Contenedor Registro -->
	</div> <!-- Contenedro Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/prevImg.js"></script>
</body>
</html>