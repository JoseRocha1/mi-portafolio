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
		<div class="opp"> <!-- Contenedor Opiniones -->
			<div class="container-sm"> <!-- Contenedor Opiniones Usuarios -->
				<h2>Opiniones de los usuarios</h2>
				<?php foreach($coment as $opinion): ?>
					<div class="cont-1">
						<a href="viewOp.php?id=<?php echo $opinion['id']; ?>"><h3>Comentario <?php echo $opinion['id']; ?></h3></a>
					</div>
				<?php endforeach; ?>
			</div> <!-- Contenedor Opiniones Usuarios -->
		</div> <!-- Contenedor Opiniones -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>