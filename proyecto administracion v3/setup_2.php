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
		<div class="home"> <!-- Contenedor Secundario -->
			<div class="container-lg"> <!-- Contenedor Métodos -->
				<h3>Formas de pago</h3>
				<div class="progress"> <!-- Barra de Progreso -->
					<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
				</div> <!-- Barra de Progreso -->
				<div class="form-check"> <!-- Radiobuttons -->
					<input type="radio" name="radios" class="form-check-input" value="card">
					<label>Tarjeta de crédito o débito <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/1280px-Visa_Inc._logo.svg.png" alt="Visa" width="50">
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/MasterCard_early_1990s_logo.svg/1280px-MasterCard_early_1990s_logo.svg.png" alt="MasterCard" width="35">
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/American_Express_logo.svg/1200px-American_Express_logo.svg.png" alt="American Express" width="25">
					</label>
				</div> <!-- Radiobuttons -->
				<div class="oculto" id="div1" style="display:none;"> <!-- Contenedor Oculto Primera Opción -->
					<h4>Agregar tarjeta</h4><br>
					<form method="POST">
						<div class="mb-3">
							<label>Nombre del titular</label>
							<input type="text" name="nom_comp" class="form-control">
						</div>
						<div class="row g-2">
							<div class="col-md-9">
								<label>Número de tarjeta</label>
								<input type="text" name="card" class="form-control" maxlength="20">
							</div>
							<div class="col-md-3">
								<label>CVV</label>
								<input type="text" name="cvv" class="form-control" maxlength="4">
							</div>
						</div>
						<div class="row g-2">
							<div class="col-md-6">
								<label>Fecha de expiración</label>
								<select name="exp" class="form-control">
									<option>Mes</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>&nbsp;</label>
								<select name="year" class="form-control">
									<option>Año</option>
									<option value="2020">2020</option>
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
									<option value="2029">2029</option>
									<option value="2030">2030</option>
								</select>
							</div>
						</div><br>
					</form>
				</div> <!-- Contenedor Oculto Primera Opción -->
				<div class="form-check"> <!--Radiobuttons-->
					<input type="radio" name="radios" class="form-check-input" value="pay">
					<label>Paypal <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/PayPal_logo.svg/800px-PayPal_logo.svg.png" alt="Paypal" width="70">
					</label>
				</div> <!-- Radiobuttons -->
				<div class="oculto" id="div2" style="display:none;"> <!-- Contenedor Oculto Segunda Opción -->
					<a href="#" class="btn btn-outline-primary">Paypal</a>
					<!--<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
							<script>paypal.Buttons().render('body');</script>-->
				</div> <!-- Contenedor Oculto Segunda Opción -->
				<div class="align_cart">
					<button type="button" class="btn btn-outline-secondary" onClick="history.back()"><i class="fas fa-arrow-left"></i> Regresar</button>
					<a href="setup_2.php" class="btn btn-success">Confirmar compra</a>
				</div>
			</div> <!-- Contenedor Métodos -->
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