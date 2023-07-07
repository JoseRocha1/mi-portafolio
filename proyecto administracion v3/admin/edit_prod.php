<html>
<head>
	<meta charset="utf-8">
	<title>Mobile Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php require 'header_basic.php'; ?> <!-- Header -->

	<div class="container"> <!-- Contenedor Principal -->
		<div class="ads"><br> <!-- Contenedor Secundario -->
			<a href="prod.php" class="btn btn-danger">Cancelar</a>
			<div class="container-md"> <!-- Contenedor Nuevos Productos -->
				<h3>Editar producto</h3>
				<form method="POST">
					<div class="mb-3">
						<label>Nombre del producto</label>
						<input type="text" name="producto" class="form-control">
					</div>
					<div class="mb-3">
						<label>Descripción del producto</label>
						<textarea name="des" class="form-control"></textarea>
					</div>
					<div class="mb-3">
						<label>Imagen Principal</label>
						<div id="preview">
							<img src="#" alt="..." id="photoSelect" class="card-img-top">
						</div>
						<input type="file" name="img_prin" id="loadPhoto" class="form-control-file">
					</div>
					<div class="mb-3">
						<label>Categoría</label>
						<select class="form-control" name="cat">
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
							<option value=""></option>
						</select>
					</div>
					<div class="mb-3">
						<label>Cantidad</label>
						<input type="number" min="0" name="quant" placeholder="0" class="form-control">
					</div>
					<div class="mb-3">
						<label>Precio</label>
						<input type="text" name="precio" class="form-control">
					</div><br>
					<div class="centrado">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div> <!-- Contenedor Nuevos Productos -->
		</div> <!-- Contenedor Secundario -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias JS -->
	<script type="text/javascript" src="../js/jquery-latest.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript" src="../js/hidden.js"></script>
	<script type="text/javascript" src="../js/prevImg.js"></script>
</body>
</html>