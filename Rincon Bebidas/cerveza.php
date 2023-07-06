<?php session_start();

require 'admin/config.php';
require 'functions.php';

/**
 * Verifica que haya conexión con la base de datos*/
$conexion = conexion($bd_config);

if(!$conexion) { //Si no hay conexión
	header('Location: error.php'); //Me reedirige a la página de error
}

/**
 * Verifica que haya una sesion creada*/
comprobarSessionUsuario();

/**
 * Obtenienendo los post's */
$sentencia = $conexion->prepare("SELECT * FROM bebidas WHERE tipo_bebida = 'cerveza'");
$sentencia->execute();

$post = $sentencia;

/**
 * Verifica que haya post's*/
if(!$post) {
    header('Location: error.php');
}

require 'views/cerveza.view.php';

?>