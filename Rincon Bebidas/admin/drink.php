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
 * Obtenienendo los post's */
$coctel = obtener_post($blog_config['post_por_pagina'], $conexion);

require '../views/drink.view.php';

?>