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
 * Contar registros de usuarios*/
$statement = $conexion->prepare('SELECT count(*) FROM usuarios');
$statement->execute();
$cont_user = $statement->fetchColumn();

/**
 * Contar registros de bebidas*/
$stm = $conexion->prepare('SELECT count(*) FROM bebidas');
$stm->execute();
$cont_drinks = $stm->fetchColumn();

require '../views/dashboard.view.php';

?>