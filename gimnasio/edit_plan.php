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
	$plan = $_POST['edit_plan'];
	$precios = $_POST['price_cost'];
	$id = limpiarDatos($_POST['id']);


	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'UPDATE plan SET plan_plan = :edit_plan, price_plan = :price_cost WHERE id = :id'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':edit_plan' => $plan,
		':price_cost' => $precios,
		':id' => $id
	));

	header('Location: plan.php');

} else {
	//Si no se envia nada carga los datos por el ID
	$id_planes = id_registro($_GET['id']);

	//Comprueba que el ID no este vacío
	if(empty($id_planes)) {
		header('Location: plan.php');
	}

	$post = obtener_registro_por_id_planes($conexion, $id_planes);

	//Si no hay ningún registro me reedirige al inicio
	if(!$post) {
		header('Location: plan.php');
	}

	$post = $post[0];
}

require 'views/edit_plan.view.php';

?>