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
		<div class="credit"><br><br> <!-- Contendor Secundario -->
			<ul class="nav nav-tabs"> <!-- Menú Secundario -->
				<li class="nav-item">
					<a href="pays.php" class="nav-link active">Métodos bancarios</a>
				</li>
			</ul> <!-- Menú Secundario -->
			<div class="container-md"><br> <!-- Contenedor Métodos de Pago -->
				<a href="setting.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i></a>
				<h2>Mis métodos de pago</h2><br>
				<div class="ele">
					<a href="new_pay.php"><i class="fas fa-plus"></i> Nueva tarjeta</a>
				</div><br>
				<div class="container-fluid"><br> <!-- Contenedor Historial -->
					<a href="#" class="btn-abrir-popup" id="btn-open-popup">
						<h5>Tarjeta i</h5>
						<div class="le">
							<a href="edit_pay.php"><i class="fas fa-pen"></i></a>
							<a href="#"><i class="fas fa-trash"></i></a>
						</div><br>
					</a><br>
				</div><br> <!-- Contenedor Historial -->
			</div> <!-- Contenedor Métodos de Pago -->

			<!-- Modal -->
			<div class="overlay" id="overlay"> <!-- Fondo Oscuro -->
				<div class="popup" id="popup"> <!-- Contenedor Modal -->
					<a href="#" class="btn-cerrar-popup" id="btn-close-popup"><i class="fas fa-times"></i></a> <!-- Botón Cerrar -->
					<div class="container-sm"> <!-- Contenedor Tarjeta -->
						<h3>Tarjeta i</h3><br>
						<div class="mb-3">
							<label>Nombre del titular</label>
							<input type="text" name="complete" class="form-control" disabled>
						</div>
						<div class="row g-2">
							<div class="col-md-9">
								<label>Número de tarjeta</label>
								<input type="text" name="num_card" class="form-control" max-length="20" disabled>
							</div>
							<div class="col-md-3">
								<label>CVV</label>
								<input type="text" name="sec" class="form-control" maxlength="4" disabled>
							</div>
						</div>
						<div class="row g-2">
							<div class="col-md-6">
								<label>Fecha de expiración</label>
								<select name="cad" class="form-control"disabled>
									<option>Mes</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>&nbsp;</label>
								<select name="yar" class="form-control" disabled>
									<option>Año</option>
								</select>
							</div>
						</div>
					</div> <!-- Contenedor Tarjeta -->
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