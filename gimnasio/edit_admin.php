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
	$names = limpiarDatos($_POST['edit_name']);
	$last_name = limpiarDatos($_POST['edit_last']);
	$correo = $_POST['edit_email'];
	$users = limpiarDatos($_POST['edit_user']);
	$passwords = $_POST['edit_pass1'];
	$id = limpiarDatos($_POST['id']);

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'UPDATE admin SET name_admin = :edit_name, last_name_admin = :edit_last, email_admin = :edit_email, user_admin = :edit_user, password_admin = :edit_pass1 WHERE id = :id'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':edit_name' => $names,
		':edit_last' => $last_name,
		':edit_email' => $correo,
		':edit_user' => $users,
		':edit_pass1' => $passwords,
		':id' => $id
	));

	header('Location: admin.php');

} else {
	//Si no se envia nada carga los datos por el ID
	$id_admin = id_registro($_GET['id']);

	//Comprueba que el ID no este vacío
	if(empty($id_admin)) {
		header('Location: admin.php');
	}

	$post = obtener_registro_por_id($conexion, $id_admin);

	//Si no hay ningún registro me reedirige al inicio
	if(!$post) {
		header('Location: admin.php');
	}

	$post = $post[0];
}


require 'views/edit_admin.view.php';

?>