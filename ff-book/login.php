<?php session_start();

require 'admin/config.php';
require 'functions.php';

/**
 * Verifica que haya conexión con la base de datos*/
$conexion = conexion($bd_config);

if(!$conexion) { //Si no hay conexión
	header('Location: error.php'); //Me reedirige a la página de error
}

$errores = '';

/**
 * Verifica que haya una sesión creada*/
if(isset($_SESSION['admin'])) {
	header('Location: ' . RUTA . '/admin/');
}

/**
 * Verifica que los datos hayan sido enviados y recibe los datos del formulario */
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$correo = $_POST['correo'];
 	$pass = $_POST['contra'];

 	if($correo == $blog_admin['usuario'] && $pass == $blog_admin['password']) {
 		$_SESSION['admin'] = $blog_admin['usuario'];
 		header('Location:' . RUTA . '/admin');
 	}
 }

require 'views/login.view.php';

?>