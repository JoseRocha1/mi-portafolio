<?php session_start();

require 'config.php';
require 'functions.php';

//Comprobar la sesión
comprobarSession();

//Conexión con la base de datos
$conexion = conexion($bd_config);
if(!$conexion) {
	header('Location: error.php'); //Si no hay conexion me reedirige a la página de error
}

//Obtiene los valores de los campos del formulario
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombres = limpiarDatos($_POST['name_card']);
	$planes = $_POST['type'];
	$precio = $_POST['price'];
	$tarjeta = $_POST['card'];
	$caducidad = $_POST['expiration'];
	$cvv = $_POST['cvv'];

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'INSERT INTO pay (id, name_client, type_plan, price_plan, card_pay, expiration_pay, cvv_pay) VALUES (null, :name_card, :type, :price, :card, :expiration, :cvv)'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':name_card'=> $nombres,
		':type' => $planes,
		':price' => $precio,
		':card' => $tarjeta,
		':expiration' => $caducidad,
		':cvv' => $cvv
	));

	header('Location: payment.php');
}

require 'views/new_payment.view.php';

?>