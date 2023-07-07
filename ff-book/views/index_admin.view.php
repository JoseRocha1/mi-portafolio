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
<body onload="mostrar()">
	<?php require '../admin/header.php'; ?>
	<div class="container"> <!-- Contenedor Principal -->
		<a href="javascript:void(0)" id="abrir" class="abrir-cerrar" onclick="mostrar();"><i class="fas fa-align-justify"></i></a>
		<div class="admin"> <!-- Contenedor Administrador -->
			<div class="container-sm"> <!-- Contenedor Registros -->
				<h2>Bienvenid@</h2>
				<div class="botones">
					<a href="nuevo.php" class="btn">Nuevo <i class="fas fa-file"></i></a>
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Título</th>
							<th scope="col">Agregado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($libros as $libro): ?>
							<tr>
								<td><?php echo $libro['id']; ?>.-</td>
								<td><?php echo $libro['titulo']; ?></td>
								<td><?php echo fecha($libro['fecha']); ?></td>
								<td>
									<a href="editar.php?id=<?php echo $libro['id']; ?>"><i class="fas fa-pen"></i></a>
									<a href="borrar.php?id=<?php echo $libro['id']; ?>"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table><br>
			</div> <!-- Contenedor Registros -->
		</div> <!-- Contenedor Administrador -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>