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
	<?php require 'views/header.php'; ?>
	<div class="container"> <!-- Contenedor Principal -->
		<!-- Contenedor Errores -->
		<?php if(!empty($errores)): ?>
			<div class="alert">
				<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
				<strong><?php echo $errores; ?></strong>
			</div>
		<?php endif; ?>
		<!-- Contenedor Errores -->
		<div class="op"> <!-- Contenedor Comentarios -->
			<div class="container-sm"> <!-- Contenedor Formulario -->
				<h2>Comentarios y/o Sugerencias</h2><br>
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<div class="form-group"> <!-- Conjunto 1 -->
						<div class="group-1"> <!-- Grupo 1 -->
							<label id="nom">Nombre</label>
							<input type="text" name="name" class="form-control" id="nom">
						</div> <!-- Grupo 1 -->
						<div class="group-2"> <!-- Grupo 2 -->
							<label id="app">Apellido</label>
							<input type="text" name="last_name" class="form-control" id="app">
						</div> <!-- Grupo 2 -->
					</div><br> <!-- Conjunto 1 -->
					<div class="form-group-2"> <!-- Conjunto 2 -->
						<div class="group-3"> <!-- Grupo 3 -->
							<label id="carrer">Facultad/Carrera</label>
							<input type="text" name="school" class="form-control" id="carrer" placeholder="FIME IAS">
						</div> <!-- Grupo 3 -->
						<div class="group-4"> <!-- Grupo 4 -->
							<label id="mat">Matricula</label>
							<input type="text" name="matricula" class="form-control" id="mat" placeholder="1234567">
						</div> <!-- Grupo 4 -->
					</div><br> <!-- Conjunto 2 -->
					<div class="group-5">
						<label id="op">Opiniones</label>
						<textarea name="opportunity" id="op" placeholder="Escribe tu mensaje..."></textarea>
					</div><br>
					<div class="botones">
						<input type="submit" class="button" value="Enviar">
					</div>
				</form>
			</div> <!-- Contenedor Formulario -->
		</div> <!-- Contenedor Comentarios -->
	</div> <!-- Contenedor Principal -->
</body>
</html>