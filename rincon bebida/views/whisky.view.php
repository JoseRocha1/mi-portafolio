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
			<h2 class="title">Whisky</h2>
			<article>
				<p>El Whisky es una bebida alcohólica producida a partir de la destilación del fermento de la malta, cereales (cebada, trigo, centeno y maíz) o cervezas, posee grandes variedades que se originan a partir del método de producción empleado, del añejamiento según el productor y principalmente del agua empleada para su elaboración. Su graduación calórica, oscila entre los 35º a 50º.</p>
			</article>
			<div class="alc"> <!-- Capa 1 -->
				<div class="ft"> <!-- Capa2 -->
					<?php foreach($post as $whisky): ?>
						<div class="card"> <!-- Contenedor Tarjeta -->
							<div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
								<img src="images/<?php echo $whisky['thumb']; ?>" alt="<?php echo $whisky['nombre_bebida']; ?>">
								<h2><?php echo $whisky['nombre_bebida']; ?></h2>
								<div class="botones">
									<a href="single.php?id=<?php echo $whisky['id']; ?>">Ver receta</a>
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