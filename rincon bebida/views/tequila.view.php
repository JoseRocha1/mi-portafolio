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
			<h2 class="title">Tequila</h2>
			<article>
				<p>El tequila es una bebida alcohólica que se obtiene a partir del agave, una planta que también se conoce como maguey. Tequila es el nombre de la localidad donde se originó este destilado: se trata de un municipio mexicano que forma parte del estado de Jalisco.</p>
				<p>Para la elaboración del tequila, se obtiene jugo del agave azul y se lo hace fermentar. Luego la preparación se destila. Cabe destacar que tequila es una denominación de origen: por lo tanto, para que la bebida pueda llevar este nombre, debe haber sido producida en ciertas regiones mexicanas y tener un mínimo de 51% de azúcares que provengan del agave.</p>
			</article>
			<div class="alc"> <!-- Capa 1 -->
				<div class="ft"> <!-- Capa 2 -->
					<?php foreach($post as $tequila): ?>
						<div class="card"> <!-- Contenedor Tarjeta -->
							<div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
								<img src="images/<?php echo $tequila['thumb']; ?>">
								<h2><?php echo $tequila['nombre_bebida']; ?></h2>
								<div class="botones">
									<a href="single.php?id=<?php echo $tequila['id']; ?>">Ver receta</a>
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