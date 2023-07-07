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
            <h2 class="title">Vino</h2>
            <article>
                <p>El vino es la bebida que se obtiene de la fermentación alcohólica total o parcial, del zumo de uvas maduras.</p>
                <p>El vino está formado por diferentes componentes, de los cuales el principal es el agua, que está presente entre un 82% y un 88%. El segundo componente más importante es el alcohol, que surge gracias a la fermentación, y le da cuerpo y aroma al vino. La graduación del vino suele variar entre el 7% y el 17%, dependiendo del tipo de vino. El resto de los componentes aparecen en menor cantidad, como azucares, influyen en el sabor del vino; taninos, que le dan color y textura al vino; sustancias volátiles, que constituyen parte del aroma; ácidos, que participan también en el sabor del vino; y algunos otros de menor importancia.</p>
            </article>
            <div class="alc"> <!-- Capa 1 -->
                <div class="ft"> <!-- Capa2 -->
                    <?php foreach($post as $vino): ?>
                        <div class="card"> <!-- Contenedor Tarjeta -->
                            <div class="imgBx"> <!-- Contenedor Tarjeta Principal -->
                                <img src="images/<?php echo $vino['thumb']; ?>" alt="<?php echo $vino['nombre_bebida']; ?>">
                                <h2><?php echo $ron['nombre_bebida']; ?></h2>
                                <div class="botones">
                                    <a href="single.php?id=<?php echo $vino['id']; ?>">Ver receta</a>
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