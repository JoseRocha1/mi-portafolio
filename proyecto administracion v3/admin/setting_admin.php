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
		<div class="admin"> <!-- Contenedor Secundario -->
			<a href="#" class="btn btn-danger">Cerrar Sesión</a>
			<div class="container-sm"> <!-- Contenedor de Configuraciones -->
				<a href="prod.php">
					<div class="box1"> <!-- Contenedor 1 -->
						<i class="fas fa-shopping-basket"></i>
						<h3>Productos</h3>
					</div> <!-- Contenedor 1 -->
				</a>
				<a href="pedidos.php">
					<div class="box2"> <!-- Contenedor 2 -->
						<i class="fas fa-clipboard"></i>
						<h3>Pedidos</h3>
					</div> <!-- Contenedor 2 -->
				</a>
			</div> <!-- Contenedor de Configuraciones -->
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