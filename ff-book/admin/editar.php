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
 * Verifica que los datos hayan sido enviados y recibe los datos del formulario*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$libro = limpiarDatos($_POST['title']);
	$editorial_autor = limpiarDatos($_POST['editorial']);
	$escuela = $_POST['school'];
	$carreras = $_POST['race'];
	$sem = $_POST['semester'];
	$descarga = $_POST['link'];
	$id = limpiarDatos($_POST['id']);

	/**
	 * Preparando y actualizando los datos*/
	$statement = $conexion->prepare('UPDATE libros SET titulo = :title, editorial = :editorial, facultad = :school, carrera = :race, semestre = :semester, enlace = :link WHERE id = :id'
	);

	/*Ejecutando la sentencia*/
	$statement->execute(array(
		':title' => $libro,
		':editorial' => $editorial_autor,
		':school' => $escuela,
		':race' => $carreras,
		':semester' => $sem,
		':link' => $descarga,
		':id' => $id
	));

	header('Location: ' . RUTA . '/admin/');
} else {
	$id_libro = id_libro($_GET['id']); //Obtiene el registro por Id

	/**
	 * Verifica que el Id no este vacio*/
	if(empty($id_libro)) {
		header('Location: ' . RUTA . '/admin/'); //Me reedirige a la página principal del administrador
	}

	/**
	 * Obtiene el libro por Id*/
	$biblio = obtener_libros_por_id($conexion, $id_libro);

	//Si no existe ningún libro
	if(!$biblio) {
		header('Location: ' . RUTA . '/admin/'); //Me reedirige a la pagina principal del administrador
	}

	$biblio = $biblio[0];
}

require '../views/editar.view.php';

?>