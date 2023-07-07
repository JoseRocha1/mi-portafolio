<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FF-BOOK</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<div class="container"> <!-- Contenedor Principal -->
		<div class="edicion"> <!-- Contenedor Editar Libro -->
			<div class="container-sm"> <!-- Contenedor Formulario -->
				<h2>Editar libro</h2>
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<input type="hidden" name="id" value="<?php echo $biblio['id']; ?>">
					<div class="group-1"> <!-- Grupo 1 -->
						<label id="titulo">Titulo del libro</label>
						<input type="text" name="title" class="form-control" id="titulo" value="<?php echo $biblio['titulo']; ?>">
					</div> <!-- Grupo 1 -->
					<div class="group-2"> <!-- Grupo 2 -->
						<label id="editorial">Editorial</label>
						<input type="text" name="editorial" class="form-control" id="editorial" value="<?php echo $biblio['editorial']; ?>">
					</div> <!-- Group 2 -->
					<div class="group-3"> <!-- Grupo 3 -->
						<label>Facultad</label>
						<select class="form-control" name="school">
							<option><?php echo $biblio['facultad']; ?></option>
							<option>Selecciona una opción</option>
							<option value="FIME">FIME</option>
							<option value="FCFM">FCFM</option>
						</select>
					</div> <!-- Grupo 3 -->
					<div class="group-4"> <!-- Grupo 4 -->
						<label>Carrera</label>
						<select class="form-control" name="race">
							<option><?php echo $biblio['carrera']; ?></option>
							<option>Selecciona una opción</option>
							<option value="IAS">IAS</option>
							<option value="ITs">ITS</option>
							<option value="Ciencias Computacionales">Ciencias Computacionales</option>
							<option value="Seguridad en T.I.">Seguridad en T.I.</option>
						</select>
					</div> <!-- Grupo 4 -->
					<div class="group-5"> <!-- Grupo 5 -->
						<label>Semestre</label>
						<select class="form-control" name="semester">
							<option><?php echo $biblio['semestre']; ?></option>
							<option>Selecciona una opción</option>
							<option value="1 Semestre">1 Semestre</option>
							<option value="2 Semestre">2 Semestre</option>
							<option value="3 Semestre">3 Semestre</option>
							<option value="4 Semestre">4 Semestre</option>
							<option value="5 Semestre">5 Semestre</option>
							<option value="6 Semestre">6 Semestre</option>
							<option value="7 Semestre">7 Semestre</option>
							<option value="8 Semestre">8 Semestre</option>
							<option value="9 Semestre">9 Semestre</option>
						</select>
					</div> <!-- Grupo 5 -->
					<div class="group-6">
						<label id="enlace">Enlace de descarga</label>
						<input type="text" name="link" class="form-control" id="enlace" value="<?php echo $biblio['enlace']; ?>">
					</div><br>
					<div class="botones">
						<a href="index.php" class="button">Cancelar</a>
						<input type="submit" name="guardar" class="btn" value="Agregar">
					</div>
				</form><br><br>
			</div> <!-- Contenedor Formulario -->
		</div> <!-- Contenedor Editar Libro -->
	</div> <!-- Contenedor Principal -->
</body>
</html>