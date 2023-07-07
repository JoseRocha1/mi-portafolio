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
 * Verifica que haya una sesión creada*/
comprobarSession();

/**
 * Obtiene el Id*/
$id = limpiarDatos($_GET['id']);

//Si no existe el Id
if(!$id) {
	header('Location: ' . RUTA . '/admin/'); //Me reedirige a la página principal del administrador
}

/**
 * Preparando y borrando los datos*/
$statement = $conexion->prepare('DELETE FROM libros WHERE id = :id');

/**Ejecutando la consulta*/
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . '/admin/');

?>