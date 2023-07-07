<?php

require 'admin/config.php';
require 'functions.php';

/**
 * Verifica que haya conexión con la base de datos**/
$conexion = conexion($bd_config);

if(!$conexion) { //Si no hay conexión
	header('Location: ../error.php'); //Me reedirige a la página de error
}

$select = 'SELECT *';
$from = ' FROM libros';
$where = ' WHERE TRUE';
$opts = isset($_POST['filterOpts'])?
		$_POST['filterOpts'] :
		array('');

if(in_array("fime", $opts)) {
	$where .= " AND facultad = 'fime'";
}

if(in_array("fcfm", $opts)) {
	$where .= " AND facultad = 'FCFM'";
}

if(in_array("ias", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND carrera = 'ias'"; //Obtiene el valor de la base de datos
}

if(in_array("its", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND carrera = 'its'"; //Obtiene el valor de la base de datos
}

if(in_array("computacionales", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND carrera = 'ciencias computacionales'"; //Obtiene el valor de la base de datos
}

if(in_array("seguridad", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND carrera = 'seguridad en t.i.'"; //Obtiene el valor de la base de datos
}

if(in_array("6_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '6 semestre'"; //Obtiene el valor de la base de datos
}

if(in_array("7_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '7 semestre'"; //Obtiene el valor de la base de datos
}

if(in_array("8_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '8 semestre'"; //Obtiene el valor de la base de datos
}

if(in_array("9_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '9 semestre'"; //Obtiene el valor de la base de datos
}

if(in_array("1_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '1 semestre'"; //Obtiene el valor de la base de datos
}

if(in_array("2_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '2 semestre'"; //Obtiene el valor de la base de datos
}

if(in_array("3_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '3 semestre'"; //Obtiene el valor de la base de datos
}

if(in_array("4_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '4 semestre'"; //Obtiene el valor de la base de datos
}

if(in_array("5_semestre", $opts)) { //Obtiene el nombre del checkbox
	$where .= " AND semestre = '5 semestre'"; //Obtiene el valor de la base de datos
}

$sql = $select . $from . $where;
$statement = $conexion->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($result);
echo($json);

?>