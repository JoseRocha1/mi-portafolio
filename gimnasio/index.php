<?php session_start();

require 'config.php';
require 'functions.php';

//Conexión con la base de datos
$conexion = conexion($bd_config);
if(!$conexion) {
	header('Location: error.php'); //Si no hay conexion me reedirige a la página de error
}

$errores = '';

//Obtiene los valores de los campos del formulario
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = $_POST['username'];
	$psw = $_POST['pass'];

	//Prepara y consulta que el usuario y contraseña sean iguales
	$statement = $conexion->prepare('
	SELECT * FROM admin WHERE user_admin = :username AND password_admin = :pass'
	);

	//Ejecuta la sentencia
	$statement->execute(array(
		':username' => $usuario,
		':pass' => $psw
	));

	$resultado = $statement->fetch();
	//Verifica que el resultado no sea falso y crea la sesión
	if($resultado !== false) {
		$_SESSION['admin'] = $usuario;
		header('Location: dashboard.php');
	} else {
		$errores .= '<strong>Usuario y/o contraseña incorrectos</strong>';
	}
}





require 'views/index.view.php';

?>

//Ejecuta la sentencia
	$statement->execute(array(
		':name' => $nombres,
		':last' => $apellidos,
		':email' => $correo,
		':user' => $usuario,
		':pass1' => $cont
	));