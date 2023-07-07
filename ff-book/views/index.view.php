<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FF-BOOK</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php require 'views/header.php'; ?>
	<div class="container"> <!-- Contenedor Principal -->
		<div class="book"> <!-- Contenedor Secundario -->
			<div class="container-lg"> <!-- Contenedor de Libros -->
				<div class="filters"> <!-- Contenedor Filtros -->
					<div class="izquierdo"> <!-- Facultad -->
						<h4>Facultad</h4>
						<div class="group-1"> <!-- Grupo 1 -->
							<label><input type="checkbox" name="fime" id="fime" class="form-check-input" value="fime"> FIME</label><br>
							<label><input type="checkbox" name="fcfm" id="fcfm" class="form-check-input" value="fcfm"> FCFM</label>
						</div> <!-- Grupo 1 -->
					</div> <!-- Facultad -->
					<div class="centrado"> <!-- Carrera -->
						<h4>Carrera</h4>
						<div class="group-2">
							<label><input type="checkbox" name="ias" id="ias" class="form-check-input" value="IAS"> IAS</label><br>
							<label><input type="checkbox" name="its" id="its" class="form-check-input" value="ITS"> ITS</label><br>
							<label><input type="checkbox" name="computacionales" id="computacionales" class="form-check-input" value="Ciencias Computacionales"> Ciencias Computacionales</label><br>
							<label><input type="checkbox" name="seguridad" id="seguridad" class="form-check-input" value="Seguridad en T.I."> Seguridad en T.I.</label>
						</div>
					</div> <!-- Carrera -->
					<div class="derecho"> <!-- Semestre -->
						<label><input type="checkbox" name="6_semestre" id="6_semestre" class="form-check-input" value="6 Semestre"> 6 Semestre</label><br>
						<label><input type="checkbox" name="7_semestre" id="7_semestre" class="form-check-input" value="7 Semestre"> 7 Semestre</label><br>
						<label><input type="checkbox" name="8_semestre" id="8_semestre" class="form-check-input" value="8 Semestre"> 8 Semestre</label><br>
						<label><input type="checkbox" name="9_semestre" id="9_semestre" class="form-check-input" value="9 Semestre"> 9 Semestre</label>
					</div> <!-- Semestre -->
					<div class="der"> <!-- Semestre  --->
						<h4>Semestre</h4>
						<label><input type="checkbox" name="1_semestre" id="1_semestre" class="form-check-input" value="1 Semestre"> 1 Semestre</label><br>
						<label><input type="checkbox" name="2_semestre" id="2_semestre" class="form-check-input" value="2 Semestre"> 2 Semestre</label><br>
						<label><input type="checkbox" name="3_semestre" id="3_semestre" class="form-check-input" value="3 Semestre"> 3 Semestre</label><br>
						<label><input type="checkbox" name="4_semestre" id="4_semestre" class="form-check-input" value="4 Semestre"> 4 Semestre</label><br>
						<label><input type="checkbox" name="5_semestre" id="5_semestre" class="form-check-input" value="5 Semestre"> 5 Semestre</label>
					</div> <!-- Semestre -->
				</div> <!-- Contenedor Filtros -->
				<h2>Libros</h2>
				<table id="books">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Titulo</th>
							<th scope="col">Editorial</th>
							<th scope="col">Facultad</th>
							<th scope="col">Carrera</th>
							<th scope="col">Semestre</th>
							<th scope="col">Enlace</th>
							<th scope="col">Agregado</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div> <!-- Contenedor de Libros -->
		</div> <!-- Contenedor Secundario -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>	
	<script type="text/javascript" src="js/libros.js"></script>
</body>
</html>