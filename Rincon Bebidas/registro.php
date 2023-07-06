<?php session_start();

require 'admin/config.php';
require 'functions.php';

/**
 * Verifica que haya conexión con la base de datos**/
$conexion = conexion($bd_config);

if(!$conexion) { //Si no hay conexión
	header('Location: error.php'); //Me reedirige a la página de error
}

$errores = '';

/**
 * Se verifica si hay una sesión y el tipo de usuario*/
if(isset($_SESSION['rol'])) {
	switch($_SESSION['rol']) {
		case 1:
			header('Location: admin/dashboard.php'); //Si es el administrador, me reedirige al panel de control
		break;

		case 2:
			header('Location: index.php'); //Si es el usuario, me reedirige a la página principal
		break;
	}
}

/**
 * Verifica que los datos hayan sido enviados y recibe los datos del formulario*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = limpiarDatos($_POST['nombre']);
	$last = limpiarDatos($_POST['apellidos']);
	$email = $_POST['correo'];
	$pass = $_POST['cont_1'];
	$pass_2 = $_POST['cont_2'];
	$birth = $_POST['cumple'];
	@$gender = $_POST['genero'];
	$ine = $_FILES['credencial']['tmp_name'];
	$rol_usuario = $_POST['rol'];

	$archivo_subido = $blog_config['carpeta_imagenes'] . $_FILES['credencial']['name'];

	//Mueve la imagen de la computadora del usuario al servidor
	move_uploaded_file($ine, $archivo_subido);

	/**
	 * Encriptando las contraseñas*/
	$pass_encrypt = hash('sha512', $pass);
	$pass_encrypt2 = hash('sha512', $pass_2);

	/**
	 * Verifica que los campos no esten vacios*/
	if(empty($name) or empty($last) or empty($email) or empty($pass) or empty($pass_2) or empty($birth) or empty($gender) or empty($ine)) {
		$errores = 'Por favor rellena todos los campos'; //Muestra el error
	} else if($pass_encrypt != $pass_encrypt2) { //Si las contraseñas no coinciden
		$errores = 'Las contraseñas no coinciden'; //Muestra el error
	} else {
		/**
		 * Preparando e insertando los datos*/
		$statement = $conexion->prepare(
			'INSERT INTO usuarios (id, first_name, last_name, email, password, birthday, gender, ine, id_rol)
			VALUES (null, :nombre, :apellidos, :correo, :cont_1, :cumple, :genero, :credencial, :rol)'
		);

		/**
		 * Ejecutando la sentencia*/
		$statement->execute(array(
			':nombre' => $name,
			':apellidos' => $last,
			':correo' => $email,
			':cont_1' => $pass_encrypt,
			':cumple' => $birth,
			':genero' => $gender,
			':credencial' => $_FILES['credencial']['name'],
			':rol' => $rol_usuario
		));

		header('Location: login.php');
	}
}

require 'views/registro.view.php';

?>

