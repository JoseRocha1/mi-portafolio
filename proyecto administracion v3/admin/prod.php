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
		<div class="admin"><br> <!-- Contenedor Secundario -->
			<a href="setting_admin.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i></a>
			<h2>Productos</h2>
			<form>
				<div class="input-group mb-3">
					<input type="text" name="search" class="form-control" aria-describedby="button-addon2" placeholder="Buscar...">
					<button type="submit" class="btn btn-primary" id="button-addon2"><i class="fas fa-search"></i></button>
				</div>
			</form>
			<div class="ele">
				<a href="new_prod.php"><i class="fas fa-plus"></i> Nuevo producto</a>
			</div>
			<div class="container-md"> <!-- Contenedor Productos -->
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Imagen</th>
							<th scope="col">Nombre</th>
							<th scope="col">Cantidad</th>
							<th scope="col">Precio</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="#" alt="Producto 1" width="75" height="75"></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="../detail.php"><i class="fas fa-eye"></i></a></td>
							<td><a href="edit_prod.php"><i class="fas fa-pen"></i></a></td>
							<td><a href="#"><i class="fas fa-trash"></i></a></td>
						</tr>
					</tbody>
				</table>
			</div> <!-- Contenedor Productos -->
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