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
			<h2 class="title">Vodka</h2>
			<article>
				<p>El vodka es un destilado que proviene de la fermentación de patata, trigo, cebada, uva, remolacha y en general cualquier planta rica en almidón. En su principio era conseguir un líquido sencillo, alcohólico y formado por etanol y agua, sin pretensiones en cuanto a su aroma y sabor, lo que lo convierte en una bebida bastante insípida. También se buscaba que tuviese un elevado grado alcohólico ara que aguantase los crudos inviernos rusos sin congelarse. Tradicionalmente tiene una graduación en torno a los 40º, aunque hay vodkas polacos que llegan a tener 80º y algunos rusos hasta 96º.</p>
			</article>
			<div class="alc"> <!-- Capa 1 -->
				<div class="ft"> <!-- Capa 2 -->
					<?php foreach($post as $vodka): ?>
						<div class="card"> <!-- Contenedor Tarjeta -->
							<div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
								<img src="images/<?php echo $vodka['thumb']; ?>">
								<h2><?php echo $vodka['nombre_bebida']; ?></h2>
								<div class="botones">
									<a href="single.php?id=<?php echo $vodka['id']; ?>">Ver receta</a>
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