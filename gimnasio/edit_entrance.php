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
	$hora_salida = $_POST['exit'];
	$id = limpiarDatos($_POST['id']);

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'UPDATE movements SET exit_movements = :exit WHERE id = :id'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':exit' => $hora_salida,
		':id' => $id
	));

	header('Location: entrance.php');

} else {
	//Si no se envia nada carga los datos por el ID
	$id_exit = id_registro($_GET['id']);

	//Comprueba que el ID no este vacío
	if(empty($id_exit)) {
		header('Location: entrance.php');
	}

	$post = obtener_registro_por_id_entrance($conexion, $id_exit);

	//Si no hay ningún registro me reedirige al inicio
	if(!$post) {
		header('Location: entrance.php');
	}

	$post = $post[0];
}

require 'views/edit_entrance.view.php';

?>