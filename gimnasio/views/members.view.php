<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POWER GYM</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="mostrar();">
	<a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()">
		<i class="fas fa-align-justify"></i>
    </a>
	<?php require 'header.php'; ?> <!-- Header -->
	<div class="container"> <!-- Contenedor Principal -->
		<div class="members"> <!-- Contenedor Usuarios -->
			<h2>Miembros</h2>
			<div class="container-lg"> <!-- Contenedor Tabla -->
				<div class="boton"> <!-- Botón -->
					<a href="new_members.php" class="btn btn-secondary">Nuevo <i class="fas fa-file"></i></a>
				</div><br> <!-- Botón -->
				<table class="table"> <!-- Tabla -->
					<thead class=" table-dark">
						<th scope="col">#</th>
						<th scope="col">Nombre</th>
						<th scope="col">Tipo de plan</th>
						<th scope="col">Caducidad membresía</th>
						<th scope="col">Método de pago</th>
						<th scope="col">Status</th>
						<th scope="col">Agregado</th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
						<?php foreach($registros as $members): ?>
							<tr>
								<th scope="row"><?php echo $members['id']; ?></th>
								<td><?php echo $members['name_client']; ?></td>
								<td><?php echo $members['type_plan']; ?></td>
								<td>00/00/00</td>
								<td><?php echo $members['method_client']; ?></td>
								<td><?php echo $members['status_client']; ?></td>
								<td><?php echo fecha($members['fecha']); ?></td>
								<td><a href="edit_members.php?id=<?php echo $members['id']; ?>"><i class="fas fa-pen"></i></a></td>
								<td><a href="delete_members.php?id=<?php echo $members['id']; ?>"><i class="fas fa-trash"></i></a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table> <!-- Tabla -->
			</div> <!-- Contenedor Tabla -->
			<?php require 'paginacion_members.php'; ?>
		</div> <!-- Contenedor Usuarios -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>