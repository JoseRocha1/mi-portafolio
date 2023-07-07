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
	$nombre_cliente = limpiarDatos($_POST['edit_name']);
	$apellidos_cliente = limpiarDatos($_POST['edit_last_name']);
	$correo_cliente = $_POST['edit_email'];
	$metodo_pago = $_POST['edit_method'];
	$plan_cliente = $_POST['edit_plan'];
	$usuario_cliente = limpiarDatos($_POST['edit_user']); 
	$contra_cliente = limpiarDatos($_POST['edit_password']);
	$estatus = $_POST['status'];
	$id = limpiarDatos($_POST['id']);

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'UPDATE clients SET name_client = :edit_name, last_name_client = :edit_last_name, email_client = :edit_email, method_client = :edit_method, type_plan = :edit_plan, user_client = :edit_user, password_client = :edit_password, status_client = :status WHERE id = :id'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':edit_name' => $nombre_cliente,
		':edit_last_name' => $apellidos_cliente,
		':edit_email' => $correo_cliente,
		':edit_method' => $metodo_pago,
		':edit_plan' => $plan_cliente,
		':edit_user' => $usuario_cliente,
		':edit_password' => $contra_cliente,
		':status' => $estatus,
		':id' => $id
	));

	header('Location: members.php');

} else {
	//Si no se envia nada carga los datos por el ID
	$id_member = id_registro($_GET['id']);

	//Comprueba que el ID no este vacío
	if(empty($id_member)) {
		header('Location: members.php');
	}

	$post = obtener_registro_por_id_members($conexion, $id_member);

	//Si no hay ningún registro me reedirige al inicio
	if(!$post) {
		header('Location: members.php');
	}

	$post = $post[0];
}

require 'views/edit_members.view.php';

?>