<?php

/**
 * Conexión con la Base de Datos*/
function conexion($bd_config) {
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch(PDOException $e) {
		return false;
	}
}

/**
 * Limpiamos los datos*/
function limpiarDatos($datos) {
	$datos = trim($datos); //Elimina los espacios en blanco al inicio y al final de la cadena de texto
	$datos = stripslashes($datos); //Quita las barras
	$datos = htmlspecialchars($datos); //Convierte los simbolos extraños en entidades HTML
	return $datos; //Devuelve la información limpia
}

/**
 * Determina cual es la página actual*/
function pagina_actual() {
	return isset($_GET['p']) ? (int)$_GET['p']: 1;
}

/**
 * Obtenemos los libros*/
function obtener_libros($libros_pagina, $conexion) {
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $libros_pagina - $libros_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM libros LIMIT $inicio, $libros_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

/**
 * Obtenemos las opiniones*/
function obtener_opiniones($opinion_pagina, $conexion) {
	$start = (pagina_actual() > 1) ? pagina_actual() * $opinion_pagina - $opinion_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM opiniones LIMIT $start, $opinion_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

/**
 * Calcula el número de páginas que va a haber en la paginación*/
function numero_paginas($libros_pagina, $conexion) {
	$total_libros = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_libros->execute();
	$total_libros = $total_libros->fetch()['total'];

	$numero_paginas = ceil($total_libros / $libros_pagina);
	return $numero_paginas;
}

/**
 * Obtenemos el Id del libro*/
function id_libro($id) {
	return (int)limpiarDatos($id);
}

/**
 * Obtenemos los libros por Id*/
function obtener_libros_por_id($conexion, $id) {
	$resultado = $conexion->query("SELECT * FROM libros WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

/**
 * Obtenemos las opiniones por Id*/
function obtener_opinion_por_id($conexion, $id) {
	$ress = $conexion->query("SELECT * FROM opiniones WHERE id = $id LIMIT 1");
	$ress = $ress->fetchAll();
	return ($ress) ? $ress : false;
}

/**
 * Traducimos la fecha a una cadena de texto*/
function fecha($fecha) {
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia-". $meses[$mes] . "-$year";
	return $fecha;
}

/**
 * Verifica que haya una sesión creada*/
function comprobarSession() {
	if(!isset($_SESSION['admin'])) {
		header('Location: ' . RUTA); //Si no existe sesión me reedirge al login
	}
}

?>