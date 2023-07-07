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
            <h2 class="title">Cerveza</h2>
            <article>
                <p>Bebida alcohólica obtenida mediante fermentación de un mosto dulce, a base de cereales germinados (principalmente cebada), con la adición de lúpulo. Mientras que en algunas regiones se utiliza un cierto porcentaje de maíz y arroz, Alemania es el único país que se rige bajo su “ley de pureza”, la cual prohíbe añadirlos.</p>
                <p>La cerveza es la bebida alcohólica más difundida en el mundo y la más antigua que se conoce.</p>
            </article>
            <div class="alc"> <!-- Capa 1 -->
                <div class="ft"> <!-- Capa2 -->
                    <?php foreach($post as $cerveza): ?>
                        <div class="card"> <!-- Contenedor Tarjeta -->
                            <div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
                                <img src="images/<?php echo $cerveza['thumb']; ?>" alt="<?php echo $cerveza['nombre_bebida']; ?>">
                                <h2><?php echo $cerveza['nombre_bebida']; ?></h2>
                                <div class="botones">
                                    <a href="single.php?id=<?php echo $cerveza['id']; ?>">Ver receta</a>
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