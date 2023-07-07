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
	$nombre = limpiarDatos($_POST['name']);
	$apellidos = limpiarDatos($_POST['last_name']);
	$correo = $_POST['email'];
	$pago = $_POST['method'];
	$planes = $_POST['plan'];
	$usuario = $_POST['user'];
	$contra = $_POST['password'];

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'INSERT INTO clients (id, name_client, last_name_client, email_client, method_client, type_plan, user_client, password_client) VALUES (null, :name, :last_name, :email, :method, :plan, :user, :password)'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':name' => $nombre,
		':last_name' => $apellidos,
		':email' => $correo,
		':method' => $pago,
		':plan' => $planes,
		':user' => $usuario,
		':password' => $contra
	));

	header('Location: members.php');
}

require 'views/new_members.view.php';

?>