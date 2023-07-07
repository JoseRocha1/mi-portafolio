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
 * Obtiene el Id*/
$id = limpiarDatos($_GET['id']);

//Si no existe el id
if(!$id) {
	header('Location: admin/drink.php'); //Me reedirige a la página principal de las bebidas
}

/**
 * Preparando y borrando los datos*/
$statement = $conexion->prepare('DELETE FROM bebidas WHERE id = :id');

/**
 * Ejecutando la consulta*/
$statement->execute(array('id' => $id));

header('Location: drink.php');

?>