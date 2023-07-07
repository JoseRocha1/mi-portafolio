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
 * Obteniendo el Id del articulo*/
$id_libro = id_libro($_GET['id']);

/**
 * Se encarga de evitar que el usuario inyecte codigo*/
if(empty($id_libro)) { //Si el Id del articulo esta vacio o no son números
	header('Location: opiniones.php'); //Me reedirige a la página principal
}

/**
 * Obtenemos el post por Id*/
$opinar = obtener_opinion_por_id($conexion, $id_libro);

/**
 * Verifica que el Id del post exista en la base de datos*/
if(!$opinar) {
	header('Location: opiniones.php'); //Me reedirige a la página de inicio
}

$opinar = $opinar[0];

require '../views/ViewOp.view.php';

?>