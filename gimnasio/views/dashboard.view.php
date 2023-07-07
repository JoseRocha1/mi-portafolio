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
    <?php require 'views/header.php'; ?> <!-- Header -->
	<div class="container"> <!-- Contenedor Principal -->
		<div class="dash"> <!-- Contenedor Dashboard -->
			<div class="izq">
				<h3>Total de miembros</h3>
				<h4><?php echo $dash; ?></h4>
			</div>
			<div class="der">
				<h3>Planes</h3>
				<h4><?php echo $e; ?></h4>
			</div>
		</div> <!-- Contenedor Dashboard -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>