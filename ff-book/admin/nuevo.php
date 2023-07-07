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

$errores = '';

/**
 * Verifica que los datos hayan sido enviados y recibe los datos del formulario*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = limpiarDatos($_POST['title']);
	$editorial = limpiarDatos($_POST['editorial']);
	$facultad = $_POST['school'];
	$carrera = $_POST['race'];
	$semestre = $_POST['semester'];
	$enlace = $_POST['link'];

	/**
	 * Verifica que los campos no esten vacios*/
	if(empty($titulo) or empty($editorial) or empty($facultad) or empty($carrera) or empty($semestre) or empty($enlace)) {
		$errores = 'Por favor rellena todos los campos'; //Muestra el error
	} else {
		/**
		 * Preparando e insertando los datos*/
		$statement = $conexion->prepare('INSERT INTO libros (id, titulo, editorial, facultad, carrera, semestre, enlace) VALUES (null, :title, :editorial, :school, :race, :semester, :link)'
		);

		/**
		 * Ejecutando la sentencia*/
		$statement->execute(array(
			':title' => $titulo,
			':editorial' => $editorial,
			':school' => $facultad,
			':race' => $carrera,
			':semester' => $semestre,
			':link' => $enlace
		));

		header('Location: ' . RUTA . '/admin/');
	}
}

require '../views/nuevo.view.php';

?>