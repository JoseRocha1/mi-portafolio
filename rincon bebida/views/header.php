<header> <!-- Encabezado -->
	<div class="navigation"> <!-- Contenedor Secundario -->
		<div class="logo"> <!-- Logo -->
			<a href="index.php"> El Rincón de la Bebida</a>
		</div> <!-- Logo -->
		<nav> <!-- Menú -->
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="cat.php">Bebidas</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav> <!-- Menú -->
		<div class="buscador"> <!-- Buscador -->
			<form method="GET" action="buscar.php">
				<input type="search" name="buscarBebidas" class="form-control" placeholder="Buscar...">
				<button type="submit" class="botones">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div> <!-- Buscador -->
		<div class="usuario"> <!-- Contenedor del Usuario -->
			<div class="dropdown"> <!-- Dropdown usuario -->
				<i class="fas fa-user"> <?php //echo $row['first_name']; ?></i>
				<div class="dropdown-content">
					<a href="cerrar.php">Cerrar Sesión</a>
				</div>
			</div> <!-- Dropdown Usuario -->
		</div> <!-- Contenedor del Usuario -->
	</div> <!-- Contenedor Secundario -->
	<hr>
</header> <!-- Encabezado -->