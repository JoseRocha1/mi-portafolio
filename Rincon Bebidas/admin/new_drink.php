<?php session_start();

require 'config.php';
require '../functions.php';

/**
 * Verifica que haya conexión con la base de datos**/
$conexion = conexion($bd_config);

if(!$conexion) { //Si no hay conexión
	header('Location: ../error.php'); //Me reedirige a la página de error
}

/**
 * Verifica que haya una sesion creada*/
comprobarSessionAdmin();

$errores = '';

/**
 * Verifica que los datos hayan sido enviados y recibe los datos del formulario*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$bebida = limpiarDatos($_POST['nom_bed']);
	$description = $_POST['desc_drink'];
	$tipo = $_POST['beb_alcohol'];
	$ingre = $_POST['ingredients'];
	$prepa = $_POST['receta'];
	$ilu = $_POST['video'];
	$img_bed = $_FILES['imagen']['tmp_name'];

	$upload_file = '../' . $blog_config['carpeta_imagenes'] . $_FILES['imagen']['name'];

	//Mueve la imagen de la computadora del usuario al servidor
	move_uploaded_file($img_bed, $upload_file);

	//Verifica que los campos no esten vacios
	if(empty($img_bed) or empty($bebida) or empty($description) or empty($tipo) or empty($ingre) or empty($prepa) or empty($ilu)) {
		$errores = 'Por favor rellena todos los campos'; //Muestra error
	} else {
		/**
		 * Preparando e insertando los datos*/
		$statement = $conexion->prepare(
			'INSERT INTO bebidas (id, nombre_bebida, descripcion, tipo_bebida, ingredientes, receta, video_ilu, thumb)
			VALUES (null, :nom_bed, :desc_drink, :beb_alcohol, :ingredients, :receta, :video, :imagen)'
		);

		/**
		 * Ejecutando la sentencia*/
		$statement->execute(array(
			':nom_bed' => $bebida,
			':desc_drink' => $description,
			':beb_alcohol' => $tipo,
			':ingredients' => $ingre,
			':receta' => $prepa,
			':video' => $ilu,
			':imagen' => $_FILES['imagen']['name']
		));
		
		header('Location: drink.php');
	}
}

require '../views/new_drink.view.php';

?>