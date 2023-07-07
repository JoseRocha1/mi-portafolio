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

//Se obtiene el ID
$id = limpiarDatos($_GET['id']);

//Se comprueba que el ID exista
if(!$id) {
	header('Location: admin.php');
}


//Prepara y borra el registro de la base de datos
$statement = $conexion->prepare('DELETE FROM admin WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: admin.php');

?>