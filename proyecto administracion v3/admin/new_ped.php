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
		<div class="ord_by"><br> <!-- Contenedor Secundario -->
			<a href="pedidos.php" class="btn btn-danger">Cancelar</a>
			<div class="container-sm"> <!-- Contenedor Pedidos Entrantes -->
				<h3>Pedido i</h3>
				<form method="POST">
					<div class="mb-3">
						<label>Número de pedido:</label>
						<h5>lorem</h5>
					</div>
					<div class="mb-3">
						<label>Cliente:</label>
						<h5></h5>
					</div>
					<div class="mb-3">
						<label>Producto:</label>
						<h5></h5>
					</div>
					<div class="mb-3">
						<img src="#" alt="Pedido" width="100px" height="100px">
					</div>
					<div class="mb-3">
						<label>Cantidad:</label>
						<h5></h5>
					</div>
					<div class="mb-3">
						<label>Precio Total: </label>
						<h5></h5>
					</div>
					<div class="mb-3">
						<label>Status</label>
						<select class="form-control" name="status">
							<option selected>...</option>
							<option value="Pendiente">Pendiente</option>
							<option value="Confirmado">Confirmado</option>
						</select>
					</div><br>
					<div class="centrado">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form><br>
			</div><br> <!-- Contenedor Pedidos Entrantes -->
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