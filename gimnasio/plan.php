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

$registros = obtener_registro_plan($blog_config['registro_por_pagina'], $conexion);

require 'views/plan.view.php';

?>