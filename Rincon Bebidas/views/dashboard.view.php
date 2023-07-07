<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Rincón de la bebida</title>
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
		<div id="admin"> <!-- Contenedor Dashboard -->
			<h2>Dashboard</h2>
			<h4>Bienvenido de nuevo</h4><br>
			<div class="group"> <!-- Grupo 1 -->
				<div class="izq"> <!-- Contenedor Izquierdo -->
					<h2><?php echo $cont_user; ?></h2>
					<h5>Usuarios</h5>
				</div> <!-- Contenedor Izquierdo -->
				<div class="der"> <!-- Contenedor Derecho -->
					<h2><?php echo $cont_drinks; ?></h2>
					<h5>Bebidas</h5>
				</div> <!-- Contenedor Derecho -->
			</div> <!-- Grupo 1 -->
			<!-- Gráfica -->
		</div> <!-- Contenedor Dashboard -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>