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
            <h2 class="title">Brandy</h2>
            <article>
                <p>El brandy es una bebida alcohólica elaborada principalmente de hollejos de uvas, es decir, se obtiene de la destilación del vino de uva (conocido también como vino de quema). Existen diferentes tipos de brandy, a los cuales en su proceso de fabricación se le añaden uvas enteras u otras frutas y estos reflejan su nombre en dicho proceso de elaboración</p>
            </article>
            <div class="alc"> <!-- Capa 1 -->
                <div class="ft"> <!-- Capa2 -->
                    <?php foreach($post as $brandy): ?>
                        <div class="card"> <!-- Contenedor Tarjeta -->
                            <div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
                                <img src="images/<?php echo $brandy['thumb']; ?>" alt="<?php echo $brandy['nombre_bebida']; ?>">
                                <h2><?php echo $brandy['nombre_bebida']; ?></h2>
                                <div class="botones">
                                    <a href="single.php?id=<?php echo $brandy['id']; ?>">Ver receta</a>
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