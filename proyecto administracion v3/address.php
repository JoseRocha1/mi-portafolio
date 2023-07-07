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
		<div class="vistas"><br><br> <!-- Contenedor Secundario -->
			<ul class="nav nav-tabs"> <!-- Menú Secundario -->
				<li class="nav-item">
					<a href="shop.php" class="nav-link">Compras realizadas</a>
				</li>
				<li class="nav-item">
					<a href="address.php" class="nav-link active">Dirección de envío</a>
				</li>
			</ul> <!-- Menú Secundario -->
			<div class="container-md"><br> <!-- Contenedor Dirección -->
				<a href="setting.php" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i></a>
				<h2>Direcciones de envío</h2><br>
				<div class="ele">
					<a href="new_address.php"><i class="fas fa-plus"></i> Nueva dirección</a>
				</div><br>
				<div class="container-fluid"><br> <!-- Contenedor Historial -->
					<a href="#" class="btn-abrir-popup" id="btn-open-popup">
						<h5>Dirección i</h5>
						<div class="le">
							<a href="edit_address.php"><i class="fas fa-pen"></i></a>
							<a href="#"><i class="fas fa-trash"></i></a>
						</div><br>
					</a><br>
				</div><br> <!-- Contenedor Historial -->
			</div> <!-- Contenedor Dirección -->

			<!-- Modal -->
			<div class="overlay" id="overlay"> <!-- Fondo Oscuro -->
				<div class="popup" id="popup"> <!-- Contenedor Modal -->
					<a href="#" class="btn-cerrar-popup" id="btn-close-popup"><i class="fas fa-times"></i></a> <!-- Botón Cerrar -->
					<div class="container-sm"> <!-- Contenedor Dirección de Envío -->
						<h3>Dirección #i</h3>
						<div class="row g-3">
							<div class="col-md-6">
								<label>Calle</label>
								<input type="text" name="address" class="form-control" disabled>
							</div>
							<div class="col-md-3">
								<label>Número interior</label>
								<input type="text" name="num_int" class="form-control" disabled>
							</div>
							<div class="col-md-3">
								<label>Número exterior</label>
								<input type="text" name="num_ext" class="form-control" disabled>
							</div>
						</div>
						<div class="row g-2">
							<div class="col-md">
								<label>Entre calles</label>
								<input type="text" name="ad_one" class="form-control" disabled>
							</div>
							<div class="col-md">
								<label>Entre calles</label>
								<input type="text" name="ad_two" class="form-control" disabled>
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label>Código postal</label>
								<input type="text" name="zip" class="form-control" disabled>
							</div>
							<div class="col-md-4">
								<label>Estado</label>
								<select name="state" class="form-control" disabled>
									<option selected>Seleccionar</option>
								</select>
							</div>
							<div class="col-md-4">
								<label>Ciudad</label>
								<input type="text" name="city" class="form-control" disabled>
							</div>
						</div>
						<div class="mb-3">
							<label>Referencias</label>
							<textarea name="ref" class="form-control" disabled></textarea>
						</div>
					</div> <!-- Contenedor Dirección de Envío -->
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
</body>
</html>