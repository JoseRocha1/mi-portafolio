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
 * Obteniendo el Id del articulo*/
$id_articulo = id_articulo($_GET['id']);

/**
 * Se encarga de evitar que el usuario inyecte codigo*/
if(empty($id_articulo)) { //Si el Id del articulo esta vacio o no son números
	header('Location: drink.php'); //Me reedirige a la página principal
}

/**
 * Obtenemos el post por Id*/
$post = obtener_post_por_id($conexion, $id_articulo);


/**
 * Verifica que el Id del post exista en la base de datos*/
if(!$post) {
	header('Location: drinks.php'); //Me reedirige a la página de inicio
}

$post = $post[0];

require '../views/detail.view.php';

?>