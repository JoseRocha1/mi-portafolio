<?php

//Captura el id de la sesión
$user = $_SESSION['rol'];

//Prepara la consulta
$statement = $conexion->prepare("SELECT id_rol, id, first_name FROM usuarios WHERE id_rol = $user");

//Ejecuta la sentencia
$statement->execute(array('id_rol' => $user));

//Devuelve un array indexado
$row = $statement->fetch(PDO::FETCH_ASSOC);

?>

<header> <!-- Encabezado -->
	<div id="sidebar" class="sidebar">
		<a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
		<div class="img_perfil"> <!-- Imagen de Perfil -->
			<img src="https://image.freepik.com/vector-gratis/panel-control-administrador-diseno-plano_23-2147870576.jpg" alt="Usuario">
			<h3><?php echo $row['first_name']; ?></h3>
			<h5>ADMIN</h5>
		</div> <!-- Imagen de Perfil -->
		<nav> <!-- Menú -->
			<ul>
				<li><a href="dashboard.php"><i class="fas fa-home"> Inicio</i></a></li>
				<li><a href="drink.php"><i class="fas fa-wine-bottle"></i> Bebidas</a></li>
				<li><a href="admin.php"><i class="fas fa-user-tie"></i> Administradores</a></li>
				<li><a href="../cerrar.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
			</ul>
		</nav> <!-- Menú -->
	</div>
</header> <!-- Encabezado -->