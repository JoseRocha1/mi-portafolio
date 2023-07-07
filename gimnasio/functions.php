<?php

//Conexion con la base de datos
function conexion($bd_config) {
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

//Limpia los campos del formulario para evitar inyecciones SQL
function limpiarDatos($datos) {
	$datos = trim($datos); //trim: elimina los espacios en blanco
	$datos = stripslashes($datos); //stripslashes: elimina los caracteres especiales
	$datos = htmlspecialchars($datos); //htmlspecialchars: elimina las etiquetas html
	return $datos;
}

//Obtiene la pagina actual de la pagina
function pagina_actual() {
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

//Obtiene los registros por pagina de administradores
function obtener_registro($registro_por_pagina, $conexion) {
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $registro_por_pagina - $registro_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM admin LIMIT $inicio, $registro_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

//Paginación
function numero_paginas($registro_por_pagina, $conexion) {
	$total_registro = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_registro->execute();
	$total_registro = $total_registro->fetch()['total'];

	$numero_paginas = ceil($total_registro / $registro_por_pagina);
	return $numero_paginas;
}

//Obtiene los registros por página de los pagos
function obtener_registro_pagos($registro_por_pagina_pagos, $conexion) {
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $registro_por_pagina_pagos - $registro_por_pagina_pagos : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM pay LIMIT $inicio, $registro_por_pagina_pagos");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

//Paginación
function numero_paginas_pagos($registro_por_pagina_pagos, $conexion) {
	$total_registro_pagos = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_registro_pagos->execute();
	$total_registro_pagos = $total_registro_pagos->fetch()['total'];

	$numero_paginas_pagos = ceil($total_registro_pagos / $registro_por_pagina_pagos);
	return $numero_paginas_pagos;
}

//Obtiene los registros por página de los miembros
function obtener_registro_members($registro_por_pagina_members, $conexion) {
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $registro_por_pagina_members - $registro_por_pagina_members : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM clients LIMIT $inicio, $registro_por_pagina_members");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

//Paginación
function numero_paginas_members($registro_por_pagina_members, $conexion) {
	$total_registro_members = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_registro_members->execute();
	$total_registro_members = $total_registro_members->fetch()['total'];

	$numero_paginas_members = ceil($total_registro_members / $registro_por_pagina_members);
	return $numero_paginas_members;
}

//Obtiene los registros por página de las entradas
function obtener_registro_entrance($registro_por_pagina_entrance, $conexion) {
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $registro_por_pagina_entrance - $registro_por_pagina_entrance : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM movements LIMIT $inicio, $registro_por_pagina_entrance");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

//Paginación
function numero_paginas_entrance($registro_por_pagina_entrance, $conexion) {
	$total_registro_entrance = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_registro_entrance->execute();
	$total_registro_entrance = $total_registro_entrance->fetch()['total'];

	$numero_paginas_entrance = ceil($total_registro_entrance / $registro_por_pagina_entrance);
	return $numero_paginas_entrance;
}

//Obtiene los registros por página de los planes
function obtener_registro_plan($registro_por_pagina_plan, $conexion) {
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $registro_por_pagina_plan - $registro_por_pagina_plan : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM plan LIMIT $inicio, $registro_por_pagina_plan");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

//Paginación
function numero_paginas_plan($registro_por_pagina_plan, $conexion) {
	$total_registro_plan = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_registro_plan->execute();
	$total_registro_plan = $total_registro_plan->fetch()['total'];

	$numero_paginas_plan = ceil($total_registro_plan / $registro_por_pagina_plan);
	return $numero_paginas_plan;
}

//Trae los registros por ID
function id_registro($id) {
	return (int)limpiarDatos($id);
}

//Obtiene los registros por el id del administrador
function obtener_registro_por_id($conexion, $id) {
	$resultado = $conexion->query("SELECT * FROM admin WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

//Obtiene los registros por el id de los pagos
function obtener_registro_por_id_pagos($conexion, $id) {
	$resultado = $conexion->query("SELECT * FROM pay WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

//Obtiene los registros por el id de los clientes
function obtener_registro_por_id_members($conexion, $id) {
	$resultado = $conexion->query("SELECT * FROM clients WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

//Obtiene los registros por el id de los movimientos
function obtener_registro_por_id_entrance($conexion, $id) {
	$resultado = $conexion->query("SELECT * FROM movements WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

//Obtiene los registros por el id de los clientes
function obtener_registro_por_id_planes($conexion, $id) {
	$resultado = $conexion->query("SELECT * FROM plan WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

//Le da formato a la fecha
function fecha($fecha) {
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia/" . $meses[$mes] . "/$year";
	return $fecha;
}

//Comprobar que haya una sesión creada
function comprobarSession() {
	if(!isset($_SESSION['admin'])) {
		header('Location: index.php');
	}
}

?>