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
	$datos = trim($datos); //Eliminar los espacios en blanco al inicio y al final de la cadena de texto
	$datos = stripslashes($datos); //Quita las barras
	$datos = htmlspecialchars($datos); //Convierte los simbolos extraños en entidades HTML
	return $datos; //Devuelve la información limpia
}

/**
 * Determina cual es la página actual */
function pagina_actual() {
	return isset($_GET['p']) ? (int)$_GET['p']: 1;
}

/**
 * Obtenemos las bebidas*/
function obtener_post($post_por_pagina, $conexion) {
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM bebidas LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

/**
 * Calcula el número de páginas que va a ver en la paginación*/
function numero_paginas($post_por_pagina, $conexion) {
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

/**
 * Obtenemos el Id del articulo*/
function id_articulo($id) {
	return (int)limpiarDatos($id);
}

/**
 * Obtenemos los post's por Id*/
function obtener_post_por_id($conexion, $id) {
	$resultado = $conexion->query("SELECT * FROM bebidas WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

/**
 * Obtenemos los usuarios por Id*/
function obtener_usuarios_por_id($conexion, $id) {
	$res = $conexion->query("SELECT * FROM usuarios WHERE id = $id LIMIT 1");
	$res = $res->fetchAll();
	return ($res) ? $res : false;
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
 * Verifica que haya una sesion creada y autentica el tipo de usuario*/
function comprobarSessionUsuario() {
	if(!isset($_SESSION['rol'])) {
		header('Location: login.php'); //Si no existe sesión me reedirge al login
	} else if($_SESSION['rol'] != 2) { //Si el rol es diferente al del usuario
		header('Location: login.php'); //Me reedirige al login
	}
}

/**
 * Verifica que haya una sesión creada y autentica el tipo de usuario*/
function comprobarSessionAdmin() {
	if(!isset($_SESSION['rol'])) {
		header('Location: ../login.php'); //Si no existe sesión me reedirge al login
	} else if($_SESSION['rol'] != 1) { //Si el rol es diferente al del usuario
		header('Location: ../login.php'); //Me reedirige 
	}
}

?>