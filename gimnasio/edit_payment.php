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

//Comprueba si el formulario a sido enviado
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre_usuario = limpiarDatos($_POST['edit_name_card']);
	$tipo_plan = $_POST['edit_type'];
	$precio = $_POST['edit_price'];
	$tarjeta = $_POST['edit_card'];
	$exp = $_POST['edit_expiration'];
	$seg = $_POST['edit_cvv'];
	$id = limpiarDatos($_POST['id']);

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'UPDATE pay SET name_client = :edit_name_card, type_plan = :edit_type, price_plan = :edit_price, card_pay = :edit_card, expiration_pay = :edit_expiration, cvv_pay = :edit_cvv WHERE id = :id'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':edit_name_card' => $nombre_usuario,
		':edit_type' => $tipo_plan,
		':edit_price' => $precio,
		':edit_card' => $tarjeta,
		':edit_expiration' => $exp,
		':edit_cvv' => $seg,
		':id' => $id
	));

	header('Location: payment.php');

} else {
	//Si no se envia nada carga los datos por el ID
	$id_payment = id_registro($_GET['id']);

	//Comprueba que el ID no este vacío
	if(empty($id_payment)) {
		header('Location: payment.php');
	}

	$post = obtener_registro_por_id_pagos($conexion, $id_payment);

	//Si no hay ningún registro me reedirige al inicio
	if(!$post) {
		header('Location: payment.php');
	}

	$post = $post[0];
}

require 'views/edit_payment.view.php';

?>