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
		<div class="conf"> <!-- Contenedor Secundario -->
			<div class="container-sm"> <!-- Contenedor de Configuraciones -->
				<a href="profile.php">
					<div class="box1"> <!-- Contenedor 1 -->
						<i class="fas fa-user"></i>
						<h3>Cuenta</h3>
					</div> <!-- Contenedor 1 -->
				</a>
				<a href="shop.php">
					<div class="box2"> <!-- Contenedor 2 -->
						<i class="fas fa-clipboard-list"></i>
						<h3>Pedidos</h3>
					</div> <!-- Contenedor 2 -->
				</a>
				<a href="pays.php">
					<div class="box3"> <!-- Contenedor 3 -->
						<i class="fas fa-money-check-alt"></i>
						<h3>Métodos de pago</h3>
					</div> <!-- Contenedor 3 -->
				</a>
			</div> <!-- Contenedor de Configuraciones -->
		</div> <!-- Contenedor Secundario -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias JS -->
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/hidden.js"></script>
	<script type="text/javascript" src="js/prevImg.js"></script>
</body>
</html>