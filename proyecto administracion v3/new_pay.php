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
		<div class="credit"><br> <!-- Contenedor Secundario -->
			<a href="pays.php" class="btn btn-danger">Cancelar</a>
			<div class="container-lg"> <!-- Contenedor Método de Pago -->
				<h3>Nueva tarjeta de crédito/débito</h3>
				<form method="POST">
					<div class="mb-3">
						<label>Nombre del titular</label>
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="row g-2">
						<div class="col-md-9">
							<label>Número de tarjeta</label>
							<input type="text" name="tarjeta" class="form-control" maxlength="20">
						</div>
						<div class="col-md-3">
							<label>CVV</label>
							<input type="text" name="codigo" class="form-control" maxlength="4">
						</div>
					</div>
					<div class="row g-2">
						<div class="col-md-6">
							<label>Fecha de expiración</label>
							<select name="vencimiento" class="form-control">
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
							<select name="fecha" class="form-control">
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
					</div><br><br>
					<div class="ctr">
						<button type="submit" class="btn btn-success">Agregar</button>
					</div>
				</form>
			</div> <!-- Contenedor Método de Pago -->
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