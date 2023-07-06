<?php session_start();

require 'admin/config.php';
require 'functions.php';

/**
 * Verifica que haya conexión con la base de datos**/
$conexion = conexion($bd_config);

if(!$conexion) { //Si no hay conexión
	header('Location: error.php'); //Me reedirige a la página de error
}

$errores = '';

/**
 * Se verifica si hay una sesión y el tipo de usuario*/
if(isset($_SESSION['rol'])) {
	header('Location: index.php');
	if(!isset($_SESSION['rol'])) {
		header('Location: login.php'); //Si no existe sesión me reedirge al login
	} else if($_SESSION['rol'] != 2) { //Si el rol es diferente al del usuario
		header('Location: login.php'); //Me reedirige al login
	}
}

/**
 * Verifica que los campos no estén vacios*/
 if(isset($_POST['correo']) && isset($_POST['contra'])) {
 	$correo = $_POST['correo'];
 	$pass = $_POST['contra'];
 	$pass_enc = hash('sha512', $pass);

 	//Prepara la consulta
 	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :correo AND password = :contra');

 	//Ejecutando la sentencia
 	$statement->execute(['correo' => $correo, 'contra' => $pass_enc]);

 	//Lo convierte en un arreglo
 	$row = $statement->fetch(PDO::FETCH_NUM);

 	//Si existe contenido en el arreglo
 	if($row == true) {
 		//Valida el Rol
 		$rol = $row[8];
 		$_SESSION['rol'] = $rol;

 		switch($_SESSION['rol']) {
		case 1:
			header('Location: admin/dashboard.php'); //Si es el administrador, me reedirige al administrador
		break;

		case 2:
			header('Location: index.php'); //Si es el usuario, me reedirige a la página principal
		break;
		}
 	} else {
 		//No existe el usuario
 		$errores = 'Correo o contraseña incorrectas';
 	}
 }

require 'views/login.view.php';

?>