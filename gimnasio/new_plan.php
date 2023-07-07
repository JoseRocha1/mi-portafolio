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
	$planes = $_POST['plan'];
	$precio = $_POST['price_cost'];

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'INSERT INTO plan (id, plan_plan, price_plan) VALUES (null, :plan, :price_cost)'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':plan' => $planes,
		':price_cost' => $precio
	));

	header('Location: plan.php');
}

require 'views/new_plan.view.php';

?>