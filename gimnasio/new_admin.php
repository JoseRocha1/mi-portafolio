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
	$nombres = limpiarDatos($_POST['name']);
	$apellidos = limpiarDatos($_POST['last']);
	$correo = $_POST['email'];
	$usuario = limpiarDatos($_POST['user']);
	$cont = $_POST['pass1'];

	//Prepara e inserta en la base de datos
	$statement = $conexion->prepare(
		'INSERT INTO admin (id, name_admin, last_name_admin, email_admin, user_admin, password_admin) VALUES (null, :name, :last, :email, :user, :pass1)'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':name' => $nombres,
		':last' => $apellidos,
		':email' => $correo,
		':user' => $usuario,
		':pass1' => $cont
	));

	header('Location: '. RUTA . 'admin.php');
}

require 'views/new_admin.view.php';

?>