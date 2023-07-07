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
            <h2 class="title">Mezcal</h2>
            <article>
                <p>El mezcal es un trago de origen mexicano que desde hace más de una década está brillando a nivel internacional. Este elixir cargado de tradición e historia es creado por la destilación del corazón del agave o maguey; una planta muy parecida a la penca.</p>
            </article>
            <div class="alc"> <!-- Capa 1 -->
                <div class="ft"> <!-- Capa2 -->
                    <?php foreach($post as $mezcal): ?>
                        <div class="card"> <!-- Contenedor Tarjeta -->
                            <div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
                                <img src="images/<?php echo $mezcal['thumb']; ?>" alt="<?php echo $mezcal['nombre_bebida']; ?>">
                                <h2><?php echo $mezcal['nombre_bebida']; ?></h2>
                                <div class="botones">
                                    <a href="single.php?id=<?php echo $mezcal['id']; ?>">Ver receta</a>
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