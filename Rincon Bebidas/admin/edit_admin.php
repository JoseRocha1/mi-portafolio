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
 * Verifica que los datos hayan sido enviados y recibe los datos del formulario*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$primer_nombre = limpiarDatos($_POST['nom_edit']);
	$apellidos = limpiarDatos($_POST['app_edit']);
	$correo = $_POST['email_edit'];
	$pass = $_POST['pass_one_edit'];
	$pass_2 = $_POST['pass_two_edit'];
	$id_rol = $_POST['id_rol'];
	$id = limpiarDatos($_POST['id']);

	/**
	 * Encriptando las contraseñas*/
	$pass_encrypt = hash('sha512', $pass);
	$pass_enc = hash('sha512', $pass_2);

	/**Verifica que las contraseñas coincidan*/
	if($pass_encrypt != $pass_enc) {
		$errores = 'Las contraseñas no coinciden'; //Muestra el error
	} else {
		/**
		 * Preparando y actualizando los datos*/
		$statement = $conexion->prepare(
			'UPDATE usuarios SET first_name = :nom_edit, last_name = :app_edit, email = :email_edit, password = :pass_one_edit, id_rol = :id_rol WHERE id = :id'
		);

		/**
		 * Ejecutando la sentencia*/
		$statement->execute(array(+
			':nom_edit' => $primer_nombre,
			':app_edit' => $apellidos,
			':email_edit' => $correo,
			':pass_one_edit' => $pass_encrypt,
			':id_rol' => $id_rol,
			':id' => $id
		));

		header('Location: admin.php');
	}
} else {
	$id_articulo = id_articulo($_GET['id']); //Obtiene el registro por Id

	/**
	 * Verifica que el Id no este vacio*/
	if(empty($id_articulo)) {
		header('Location: admin/admin.php'); //Me redirige a la página principal de los administradores
	}

	/**
	 * Obtiene el post por Id*/
	$ad = obtener_usuarios_por_id($conexion, $id_articulo);

	//Si no existe ningun usuario
	if(!$ad) {
		header('Location: admin/admin.php'); //Me reedirige a la página principal de los administradores
	}

	$ad = $ad[0];
}

require '../views/edit_admin.view.php';

?>