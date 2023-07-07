<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FF-BOOK</title>
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
		<div class="login"> <!-- Contenedor Login -->
			<h2>Iniciar Sesión</h2>
			<form method="POST" action="<?php //echo htmlspecialchars($_POST['PHP_SELF']); ?>"> <!-- Formulario -->
				<div class="group-1"> <!-- Grupo 1 -->
					<label id="email">Correo electrónico</label>
					<input type="email" name="correo" class="form-control" id="email" placeholder="name@example.com">
				</div> <!-- Grupo 1 -->
				<div class="group-2"> <!-- Grupo 2 -->
					<label id="contra">Contraseña</label>
					<input type="password" name="contra" class="form-control" id="contra">
				</div><br> <!-- Grupo 2 -->
				<div class="botones">
					<input type="submit" class="button" value="Entrar">
				</div>
			</form> <!-- Formulario -->
		</div> <!-- Contenedor Login -->
	</div> <!-- Contenedor Principal -->
</body>
</html>