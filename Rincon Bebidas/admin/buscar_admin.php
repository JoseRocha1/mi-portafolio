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
 * Verifica que se haya enviado el metodo GET y que el campo no este vacio*/
if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])) {
	$busqueda = limpiarDatos($_GET['search']);

	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE first_name LIKE :search');
	$statement->execute(array(':search' => "%$busqueda%"));
	$resultados = $statement->fetchAll();

	if(empty($resultados)) {
		$titulo = 'No se encontraron usuarios con el nombre: ' . $busqueda;
	} else {
		$titulo = 'Resultados de la busqueda: ' . $busqueda;
	}
} else {
	header('Location: admin/admin.php');
}

require '../views/buscar_admin.view.php';

?>