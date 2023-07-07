<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Rincon de la bebida</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body onload="mostrar()">
	<?php require '../header_admin.php'; ?>
	<div class="container"> <!-- Contenedor Principal -->
		<a href="javascript:void(0)" id="abrir" class="abrir-cerrar" onclick="mostrar();"><i class="fas fa-align-justify"></i></a>
		<div class="admin"> <!-- Contenedor Administradores -->
			<div class="buscador"> <!-- Buscador -->
				<form method="GET" action="<?php echo RUTA; ?>/admin/buscar_admin.php">
					<input type="search" name="search" class="form-control" placeholder="Buscar...">
					<button type="submit" class="botones"><i class="fas fa-search"></i></button>
				</form>
			</div> <!-- Buscador -->
			<div class="container-sm">
				<h2>Administradores</h2>
				<div class="botones">
					<a href="new_admin.php" class="button">Nuevo <i class="fas fa-file"></i></a>
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col">Nombre</th>
							<th scope="col">Agregado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($res as $admin): ?>
							<tr>
								<td><?php echo $admin['first_name']; ?></td>
								<td><?php echo fecha($admin['fecha']); ?></td>
								<td>
									<a href="edit_admin.php?id=<?php echo $admin['id']; ?>"><i class="fas fa-pen"></i></a>
									<a href="borrar_admin.php?id=<?php echo $admin['id']; ?>"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div> <!-- Contenedor Administradores -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>