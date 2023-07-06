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

/**
 * Selecciona todos los registros que hay en la tabla usuarios*/
$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id_rol = 1');
$statement->execute();
$res = $statement->fetchAll();

require '../views/admin.view.php';

?>