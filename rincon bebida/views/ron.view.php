<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Rincón de la Bebida</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php require 'header.php'; ?>
	<div class="container"> <!-- Contenedor Principal -->
		<div class="bebida"> <!-- Contenedor Bebidas -->
			<h2 class="title">Ron</h2>
			<article>
				<p>El ron es un licor que se obtiene mediante la fermentación, destilación y el añejamiento de la caña de azúcar (o melazas derivadas de esta) en barricadas de madera durante periodos de tiempos que varían según el fabricante, generalmente de roble. Este aguardiente llega a tener 80º de alcohol aunque se rebaja añadiéndole agua. El ron es elaborado en diferentes países, principalmente caribeños, en donde cada casa productora prepara rones con diferentes características.</p>
			</article>
			<div class="alc"> <!-- Capa 1 -->
				<div class="ft"> <!-- Capa2 -->
					<?php foreach($post as $ron): ?>
						<div class="card"> <!-- Contenedor Tarjeta -->
							<div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
								<img src="images/<?php echo $ron['thumb']; ?>" alt="<?php echo $ron['nombre_bebida']; ?>">
								<h2><?php echo $ron['nombre_bebida']; ?></h2>
								<div class="botones">
									<a href="single.php?id=<?php echo $ron['id']; ?>">Ver receta</a>
								</div>
							</div> <!-- Contenedor Tarjeta Principal -->
						</div> <!-- Contenedor Tarjeta -->
					<?php endforeach; ?>
				</div> <!-- Capa 2 -->
			</div> <!-- Capa 1 -->
		</div> <!-- Contenedor Bebidas -->
	</div> <!-- Contenedor Principal -->
</body>
</html>