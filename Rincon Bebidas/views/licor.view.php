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
            <h2 class="title">Licor de hierbas</h2>
            <article>
                <p>El licor de hierbas se podría definir grosso modo como una maceración de hierbas aromáticas en aguardiente. Y a este se le agregaría finalmente azúcar para darle un toque más dulzón. Este tipo de licor es muy popular en todo el mundo y muy consumido en España, donde podemos encontrar una gran variedad de sabores. Normalmente los licores de hierbas tienen entre 25 y 50º de volumen.</p>
            </article>
            <div class="alc"> <!-- Capa 1 -->
                <div class="ft"> <!-- Capa2 -->
                    <?php foreach($post as $licor): ?>
                        <div class="card"> <!-- Contenedor Tarjeta -->
                            <div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
                                <img src="images/<?php echo $licor['thumb']; ?>" alt="<?php echo $licor['nombre_bebida']; ?>">
                                <h2><?php echo $licor['nombre_bebida']; ?></h2>
                                <div class="botones">
                                    <a href="single.php?id=<?php echo $licor['id']; ?>">Ver receta</a>
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