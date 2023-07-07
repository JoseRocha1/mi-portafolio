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
	$nom = limpiarDatos($_POST['bebida']);
	$desc = $_POST['desc_bebida'];
	$tipo = $_POST['tipo_bebida'];
	$ing = $_POST['ing_receta'];
	$rec = $_POST['pasos'];
	$link = $_POST['enlace'];
	$id = limpiarDatos($_POST['id']);
	$thumb_save = $_POST['thumb-guardada'];
	$ima = $_FILES['img_edit'];

	/**
	 * Si el nombre de la thumb no tiene ningún cambio*/
	if(empty($ima['name'])) {
		$ima = $thumb_save; //El nombre es el mismo
	} else { //Si no, mueve la nueva imagen de la comptadora del usuario al servidor
		$destino = '../' . $blog_config['carpeta_imagenes'] . $_FILES['img_edit']['name'];
		move_uploaded_file($_FILES['img_edit']['tmp_name'], $destino);
		$ima = $_FILES['img_edit']['name'];
	}

	/**
	 * Preparando y actualizando los datos*/
	$statement = $conexion->prepare(
		'UPDATE bebidas SET nombre_bebida = :bebida, descripcion = :desc_bebida, tipo_bebida = :tipo_bebida, ingredientes = :ing_receta, receta = :pasos, video_ilu = :enlace, thumb = :img_edit WHERE id = :id'
	);

	/**
	 * Ejecutando la sentencia*/
	$statement->execute(array(
		':bebida' => $nom,
		':desc_bebida' => $desc,
		':tipo_bebida' => $tipo,
		':ing_receta' => $ing,
		':pasos' => $rec,
		':enlace' => $link,
		':img_edit' => $ima,
		':id' => $id
	));
	
	header('Location: drink.php');
} else {
	$id_articulo = id_articulo($_GET['id']); //Obtiene el registro por Id

	/**
	 * Verifica que el Id no este vacio*/
	if(empty($id_articulo)) {
		header('Location: admin/drink.php'); //Me reedirige a la página principal de las bebidas
	}

	/**
	 * Obtiene el post por Id*/
	$post = obtener_post_por_id($conexion, $id_articulo);

	//Si no existe ningún post
	if(!$post) {
		header('Location: admin/drink.php'); //Me reedirige a la página principal de las bebidas
	}

	$post = $post[0];
}

require '../views/edit_drink.view.php';

?>