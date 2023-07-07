<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Rincón de la Bebida</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
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
		<div class="drink"> <!-- Contenedor Nueva Bebida -->
			<h2>Nueva Bebida</h2>
			<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> <!-- Formulario -->
				<div class="img_bebidas"> <!-- Vista Previa Imagen Bebida -->
					<img src="#" alt="Bebida" id="photoSelect">
				</div> <!-- Vista Previa Imagen Bebida -->
				<input type="file" name="imagen" accept="image/png, image/jpg, image/jpeg" id="loadPhoto">
				<div class="group-1">
					<input type="text" name="nom_bed" class="form-control" placeholder="Nombre de la bebida">
				</div>
				<div class="group-2">
					<textarea class="form-control" name="desc_drink" placeholder="Descripción de la bebida"></textarea>
				</div>
				<div class="group-3">
					<select class="form-control" name="beb_alcohol">
						<option>Tipo de bebida</option>
						<option value="Brandy">Brandy</option>
						<option value="Cerveza">Cerveza</option>
						<option value="Coñac">Coñac</option>
						<option value="Ginebra">Ginebra</option>
						<option value="Licor de hierba">Licor de hierba</option>
						<option value="Mezcal">Mezcal</option>
						<option value="Ron">Ron</option>
						<option value="Tequila">Tequila</option>
						<option value="Vino">Vino</option>
						<option value="Vodka">Vodka</option>
						<option value="Whiskey">Whiskey</option>
						<option value="Whisky">Whisky</option>
					</select>
				</div>
				<div class="group-4">
					<textarea class="form-control" name="ingredients" placeholder="Ingredientes"></textarea>
				</div>
				<div class="group-5">
					<textarea class="form-control" name="receta" placeholder="Preparación"></textarea>
				</div>
				<div class="group-6">
					<input type="text" name="video" class="form-control" placeholder="Enlace del video ilustrativo">
				</div><br>
				<div class="botones">
					<a href="drink.php" class="button">Cancelar</a>
					<input type="submit" name="reg" class="btn" value="Agregar">
				</div><br><br><br>
			</form> <!-- Formulario -->
		</div> <!-- Contenedor Nueva Bebida -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/prevImg.js"></script>
</body>
</html>