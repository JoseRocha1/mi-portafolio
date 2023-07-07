<html>
<head>
	<meta charset="utf-8">
	<title>Mobile Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php require 'header.php'; ?> <!-- Header -->

	<div class="container"> <!-- Contenedor Principal -->
		<div class="home"> <!-- Contenedor Secundario -->
			<div class="container-fluid"> <!-- Contenedor carrito -->
				<h3>Productos agregados</h3><br>
				<a href="#" class="btn btn-danger">Vaciar carrito</a>
				<table class="table table-borderless">
					<thead>
						<tr>
							<th scope="col">Productos</th>
							<th scope="col">Cantidad</th>
							<th scope="col">Precio</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<img src="images/img-1.jpg" alt="No disponible">
								<label>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								</label>
							</td>
							<td><input type="number" min="0" name="numbers" placeholder="0"></td>
							<td><input type="text" name="cant" placeholder="$1500" disabled></td>
							<td><a href="#"><i class="fas fa-trash"></i></a></td>
						</tr>
					</tbody>
				</table>
				<p>Total: </p><br><br>
				<div class="align_cart">
					<a href="index.php" class="btn btn-secondary">Seguir comprando</a>
					<a href="setup_1.php" class="btn btn-info">Continuar</a>
				</div>
			</div> <!-- Contenedor carrito -->
		</div> <!-- Contenedor Secundario -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias JS -->
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>