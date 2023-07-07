<?php session_start();

require 'admin/config.php';
require 'functions.php';

/**
 * Verifica que haya conexión con la base de datos**/
$conexion = conexion($bd_config);

if(!$conexion) { //Si no hay conexión
	header('Location: ../error.php'); //Me reedirige a la página de error
}

$errores = '';

/**
 * Verifica que los datos hayan sido enviados y recibe los datos del formulario*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nom = limpiarDatos($_POST['name']);
	$appe = limpiarDatos($_POST['last_name']);
	$facultad = limpiarDatos($_POST['school']);
	$mat = limpiarDatos($_POST['matricula']);
	$op = $_POST['opportunity'];

	/**
	 * Verifica que los campos no esten vacios*/
	if(empty($nom) or empty($appe) or empty($facultad) or empty($mat) or empty($op)) {
		$errores = 'Por favor rellena todos los campos'; //Muestra el error
	} else {
		/**
		 * Preparando e insertando los datos*/
		$statement = $conexion->prepare('INSERT INTO opiniones (id, nombre, apellido, facultad, matricula, opinion) VALUES (null, :name, :last_name, :school, :matricula, :opportunity)'
		);

		/**
		 * Ejecutando la sentencia*/
		$statement->execute(array(
			':name' => $nom,
			':last_name' => $appe,
			':school' => $facultad,
			':matricula' => $mat,
			':opportunity' => $op
		));

		header('Location: ' . RUTA . '/index.php');
	}
}



require 'views/opinion.view.php';

?>