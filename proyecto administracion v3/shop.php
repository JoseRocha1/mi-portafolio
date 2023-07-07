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
	<?php require 'header_basic.php'; ?> <!-- Header -->

	<div class="container"> <!-- Contenedor Principal -->
		<div class="ord"><br><br> <!-- Contenedor Secundario -->
			<ul class="nav nav-tabs"> <!-- Menú Secundario -->
				<li class="nav-item">
					<a href="shop.php" class="nav-link active">Compras realizadas</a>
				</li>
				<li class="nav-item">
					<a href="address.php" class="nav-link">Dirección de envío</a>
				</li>
			</ul> <!-- Menú Secundario -->
			<div class="container-md"><br> <!-- Contenedor Compras -->
				<a href="setting.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i></a>
				<h2>Compras realizadas</h2>
				<div class="container-fluid"><br> <!-- Contenedor Historial -->
					<a href="#" class="btn-abrir-popup" id="btn-open-popup">
						<h5>Recibo i</h5>
						<div class="le">
							<a href="#"><i class="fas fa-truck"></i></a>
						</div><br>
					</a><br>
				</div><br> <!-- Contenedor Historial -->
			</div> <!-- Contenedor Compras -->

			<!-- Modal -->
			<div class="overlay" id="overlay"> <!-- Fondo Oscuro -->
				<div class="popup" id="popup"> <!-- Contenedor Modal -->
					<a href="#" class="btn-cerrar-popup" id="btn-close-popup"><i class="fas fa-times"></i></a> <!-- Botón Cerrar -->
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div> <!-- Contenedor Modal -->
			</div> <!-- Fondo Oscuro -->
			<!-- Modal -->

		</div> <!-- Contenedor Secundario -->
	</div> <!-- Contenedor Principal -->
	
	<!-- Librerias JS -->
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/hidden.js"></script>
	<script type="text/javascript" src="js/prevImg.js"></script>
	<script type="text/javascript" src="js/popup.js"></script>
</body>
</html>

<!-- https://www.youtube.com/watch?v=VAkKb8lTd-Q&ab_channel=FalconMasters -->