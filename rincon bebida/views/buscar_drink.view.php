<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Rincón de la Bebida</title>
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
		<div class="be"> <!-- Contenedor Bebidas -->
			<div class="buscador"> <!-- Buscador -->
				<form method="GET" action="admin/buscar_drink.php">
					<input type="search" name="search" class="form-control" placeholder="Buscar...">
					<button type="submit" class="botones"><i class="fas fa-search"></i></button>
				</form>
			</div> <!-- Buscador -->
			<div class="container-md">
				<h2><?php echo $titulo; ?></h2>
				<table>
					<thead>
						<tr>
							<th scope="col">Nombre</th>
							<th scope="col">Imagen</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($resultados as $buscando): ?>
							<tr>
								<td><?php echo $buscando['nombre_bebida']; ?></td>
								<td><img src="images/<?php echo $buscando['thumb']; ?>" alt="<?php echo $buscando['nombre_bebida']; ?>"></td>
								<td>
									<a href="../detail.php?id=<?php echo $buscando['id']; ?>"><i class="fas fa-eye"></i></a>
									<a href="edit_drink.php?id=<?php echo $buscando['id']; ?>"><i class="fas fa-pen"></i></a>
									<a href="borrar.php?id=<?php echo $buscando['id']; ?>"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<?php require 'paginacion.php'; ?>
		</div> <!-- Contenedor Bebidas -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>