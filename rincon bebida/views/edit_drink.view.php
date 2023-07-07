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
		<div class="drink"> <!-- Contenedor Nueva Bebida -->
			<h2>Editar Bebida</h2>
			<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
				<div class="img_bebidas"> <!-- Vista Previa Imagen Bebida -->
					<img src="images/<?php echo $post['thumb']; ?>" alt="<?php echo $post['nombre_bebida']; ?>" id="photoSelect">
				</div> <!-- Vista Previa Imagen Bebida -->
				<input type="file" name="img_edit" accept="image/png, image/jpg, image/jpeg" id="loadPhoto">
				<div class="group-1">
					<input type="text" name="bebida" class="form-control" value="<?php echo $post['nombre_bebida']; ?>">
				</div>
				<div class="group-2">
					<textarea class="form-control" name="desc_bebida"><?php echo $post['descripcion']; ?></textarea>
				</div>
				<div class="group-3">
					<select class="form-control" name="tipo_bebida">
						<option><?php echo $post['tipo_bebida']; ?></option>
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
					<textarea class="form-control" name="ing_receta"><?php echo $post['ingredientes']; ?></textarea>
				</div>
				<div class="group-5">
					<textarea class="form-control" name="pasos"><?php echo $post['receta']; ?></textarea>
				</div>
				<div class="group-6">
					<input type="text" name="enlace" class="form-control" value="<?php echo $post['video_ilu']; ?>">
				</div><br>
				<input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">
				<div class="botones">
					<a href="drink.php" class="button">Cancelar</a>
					<input type="submit" name="reg" class="btn" value="Guardar">
				</div><br><br><br>
			</form>
		</div> <!-- Contenedor Nueva Bebida -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/prevImg.js"></script>
</body>
</html>