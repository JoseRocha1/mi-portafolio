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
	$usuario = limpiarDatos($_POST['username']);
	$contra = $_POST['pass'];

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'INSERT INTO movements (id, user_client, password_client) VALUES (null, :username, :pass)'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':username' => $usuario,
		':pass' => $contra
	));

	header('Location: entrance.php');
}

require 'views/new_entrance.view.php';

?>