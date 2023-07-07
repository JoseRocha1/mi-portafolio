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
		<div class="vistas"><br> <!-- Contenedor Secundario -->
			<a href="address.php" class="btn btn-danger">Cancelar</a>
			<div class="container-lg"> <!-- Contenedor Dirección de Envío -->
				<h3>Dirección de envío</h3>
				<form method="POST">
					<div class="row g-3">
						<div class="col-md-6">
							<label>Calle</label>
							<input type="text" name="adrs" class="form-control">
						</div>
						<div class="col-md-3">
							<label>Número interior</label>
							<input type="text" name="no_int" class="form-control">
						</div>
						<div class="col-md-3">
							<label>Número exterior</label>
							<input type="text" name="no_ext" class="form-control">
						</div>
					</div>
					<div class="row g-2">
						<div class="col-md">
							<label>Entre calles</label>
							<input type="text" name="adr_uno" class="form-control">
						</div>
						<div class="col-md">
							<label>Entre calles</label>
							<input type="text" name="adr_dos" class="form-control">
						</div>
					</div>
					<div class="row g-3">
						<div class="col-md-4">
							<label>Código postal</label>
							<input type="text" name="codigo" class="form-control">
						</div>
						<div class="col-md-4">
							<label>Estado</label>
							<select name="st" class="form-control">
								<option selected="">Seleccionar</option>
								<option value="Aguascalientes">Aguascalientes</option>
								<option value="Baja California">Baja California</option>
								<option value="Baja California Sur">Baja California Sur</option>
								<option value="Campeche">Campeche</option>
								<option value="Chiapas">Chiapas</option>
								<option value="Chihuahua">Chihuahua</option>
								<option value="Coahuila">Coahuila</option>
								<option value="Colima">Colima</option>
								<option value="Durango">Durango</option>
								<option value="Estado de México">Estado de México</option>
								<option value="Guanajuato">Guanajuato</option>
								<option value="Guerrero">Guerrero</option>
								<option value="Hidalgo">Hidalgo</option>
								<option value="Jalisco">Jalisco</option>
								<option value="Michoacán">Michoacán</option>
								<option value="Morelos">Morelos</option>
								<option value="Nayarit">Nayarit</option>
								<option value="Nuevo León">Nuevo León</option>
								<option value="Oaxaca">Oaxaca</option>
								<option value="Puebla">Puebla</option>
								<option value="Querétaro">Querétaro</option>
								<option value="Quintana Roo">Quintana Roo</option>
								<option value="San Luis Potosí">San Luis Potosí</option>
								<option value="Sinaloa">Sinaloa</option>
								<option value="Sonora">Sonora</option>
								<option value="Tabasco">Tabasco</option>
								<option value="Tamaulipas">Tamaulipas</option>
								<option value="Tlaxcala">Tlaxcala</option>
								<option value="Veracruz">Veracruz</option>
								<option value="Yucatán">Yucatán</option>
								<option value="Zacatecas">Zacatecas</option>
							</select>
						</div>
						<div class="col-md-4">
							<label>Ciudad</label>
							<input type="text" name="siri" class="form-control">
						</div>
					</div>
					<div class="mb-3">
						<label>Referencias</label>
						<textarea name="refresh" class="form-control"></textarea>
					</div><br>
					<div class="centrado">
						<button type="submit" class="btn btn-success">Actualizar</button>
					</div>
				</form>
			</div> <!-- Contenedor Dirección de Envio -->
		</div> <!-- Contenedor Secundario -->
	</div><!-- Contenedor Principal -->

	<!-- Librerias JS -->
	<script type="text/javascript" src="js/jquery-latest.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/hidden.js"></script>
	<script type="text/javascript" src="js/prevImg.js"></script>
</body>
</html>