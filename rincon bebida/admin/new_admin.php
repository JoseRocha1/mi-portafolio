<?php session_start();

require 'config.php';
require '../functions.php';

/**
 * Verifica que haya conexión con la base de datos**/
$conexion = conexion($bd_config);

if(!$conexion) { //Si no hay conexión
	header('Location: ../error.php'); //Me reedirige a la página de error
}

/**
 * Verifica que haya una sesion creada*/
comprobarSessionAdmin();

$errores = '';

/**
 * Verifica que los datos hayan sido enviados y recibe los datos del formulario*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = limpiarDatos($_POST['nom_admin']);
	$app = limpiarDatos($_POST['app_admin']);
	$correo = $_POST['email_admin'];
	$pass_one = $_POST['pass_one_admin'];
	$pass_two = $_POST['pass_two_admin'];
	$rol_user = $_POST['rol'];

	/**
	 * Encriptando las contraseñas*/
	$encrypt = hash('sha512', $pass_one);
	$encrypt_2 = hash('sha512', $pass_two);

	/**
	 * Verifica que los campos no esten vacios*/
	if(empty($nombre) or empty($app) or empty($correo) or empty($pass_one) or empty($pass_two)) {
		$errores = 'Por favor rellena todos los campos'; //Muestra el error
	} else if($encrypt != $encrypt_2) { //Si las contraseñas no coinciden
		$errores = 'Las contraseñas no coinciden'; //Muestra el error
	} else {
		/**Preparando e insertando los datos*/
		$statement = $conexion->prepare(
			'INSERT INTO usuarios (id, first_name, last_name, email, password, id_rol) VALUES (null, :nom_admin, :app_admin, :email_admin, :pass_one_admin, :rol) '
		);

		/**
		 * Ejecutando la sentencia*/
		$statement->execute(array(
			':nom_admin' => $nombre,
			':app_admin' => $app,
			':email_admin' => $correo,
			':pass_one_admin' => $encrypt,
			':rol' => $rol_user
		));

		header('Location: admin.php');
	}
}

require '../views/new_admin.view.php';

?>