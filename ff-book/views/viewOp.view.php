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
		<div class="view"> <!-- Contenedor Ver Opinión -->
			<div class="container-sm"> <!-- Contenedor Opiniones -->
				<h2>Comentarios y/o Sugerencias</h2>
				<div class="form-group"> <!-- Conjunto 1 -->
					<div class="group-1"> <!-- Grupo 1 -->
						<label id="nom">Nombre</label>
						<input type="text" class="form-control" id="nom" value="<?php echo $opinar['nombre']; ?>" disabled>
					</div> <!-- Grupo 1 -->
					<div class="group-2"> <!-- Grupo 2 -->
						<label id="app">Apellido</label>
						<input type="text" class="form-control" id="app" value="<?php echo $opinar['apellido']; ?>" disabled>
					</div> <!-- Grupo 2 -->
				</div><br> <!-- Conjunto 1 -->
				<div class="form-group-2"> <!-- Conjunto 2 -->
					<div class="group-3"> <!-- Grupo 3 -->
						<label id="carrer">Facultad/Carrera</label>
						<input type="text" class="form-control" id="carrer" value="<?php echo $opinar['facultad']; ?>" disabled>
					</div> <!-- Grupo 3 -->
					<div class="group-4"> <!-- Grupo 4 -->
						<label id="mat">Matricula</label>
						<input type="text" class="form-control" id="mat" value="<?php echo $opinar['matricula']; ?>" disabled>
					</div> <!-- Grupo 4 -->
				</div><br> <!-- Conjunto 2 -->
				<div class="group-5">
					<label id="op">Opiniones</label>
					<textarea id="op" disabled><?php echo $opinar['opinion']; ?></textarea>
				</div>
			</div> <!-- Contenedor Opiniones -->
		</div> <!-- Contenedor Ver Opinión -->
	</div> <!-- Contenedor Principal -->
</body>
</html>