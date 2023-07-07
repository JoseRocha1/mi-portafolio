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

$statement = $conexion->prepare('SELECT COUNT(*) total FROM clients');
$dash = $statement->fetchColumn();

$statement = $conexion->prepare('SELECT COUNT(*) total FROM plan');
$e = $statement->fetchColumn();

require 'views/dashboard.view.php';

?>