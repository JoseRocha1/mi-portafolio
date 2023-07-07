<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Rincon de la Bebida</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<?php require '../header_admin.php'; ?>
	<div class="container"> <!-- Contenedor Principal -->
		<div class="detail"> <!-- Contenedor Detalles -->
			<h2 class="title"><?php echo $post['nombre_bebida']; ?></h2><br>
			<div class="portada"> <!-- Imagen de portada -->
				<img src="../images/<?php echo $post['thumb']; ?>" alt="<?php echo $post['nombre_bebida']; ?>">
			</div><br> <!-- Imagen de Portada -->
			<article>
				<p></p>
			</article><br><br>
			<div class="videos"> <!-- Videos -->
				<iframe width="853" height="480" src="https://www.youtube.com/embed/<?php echo $post['video_ilu']; ?>" frameborder="0" allowfullscreen></iframe>
			</div><br><br> <!-- Videos -->
			<div class="tipo"> <!-- Tipo de Bebida -->
			</div> <!-- Tipo de Bebida -->
			<div class="ingredients"> <!-- Contenedor Ingredientes -->
				<h2>Ingredientes</h2><br>
				<span>
					<p><i class="fas fa-check-circle"><?php echo nl2br($post['ingredientes']); ?></i></p>
				</span>
			</div><br><br> <!-- Contenedor Ingredientes -->
			<div class="pr"> <!-- Contenedor Preparación -->
				<h2>Preparación</h2><br>
				<span>
					<ol>
						<li><?php echo nl2br($post['receta']); ?></li><br>
					</ol>
				</span>
			</div> <!-- Contenedor Preparación -->
		</div> <!-- Contenedor Detalles -->
	</div> <!-- Contenedor Principal -->
</body>
</html>