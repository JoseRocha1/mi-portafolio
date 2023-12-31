<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POWER GYM</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #262E3F;">
	<div class="container"> <!-- Contenedor Principal -->
		<div class="login"> <!-- Contenedor Login -->
			<?php if(!empty($errores)): ?>
				<div class="alert" style="background-color: #f44336; padding: 20px; color: #fff;">
					<?php echo $errores; ?>
				</div>
			<?php endif; ?>
			<div class="container-sm"> <!-- Contenedor Formulario -->
				<div class="logo"> <!-- Logo -->
					<img src="images/image.png">
				</div> <!-- Logo -->
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<div class="group-1"> <!-- Grupo 1 -->
						<div class="mb-3">
							<input type="text" name="username" class="form-control" placeholder="Usuario">
						</div> <!-- Grupo 1 -->
					</div>
					<div class="group-2"> <!-- Grupo 2 -->
						<div class="mb-3">
							<input type="password" name="pass" class="form-control" placeholder="Contraseña">
						</div>
					</div> <!-- Grupo 2 -->
					<div class="boton"> <!-- Botón -->
						<input type="submit" class="btn btn-primary" value="Inciar sesión">
					</div> <!-- Botón -->
				</form><br>
			</div> <!-- Contenedor Formulario -->
		</div> <!-- Contenedor Login -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>