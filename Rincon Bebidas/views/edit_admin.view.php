<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Rincon de la Bebida</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<div class="container"> <!-- Contenedor Principal -->
		<!-- Contenedor Errores -->
		<?php if(!empty($errores)): ?>
			<div class="alert">
				<span class="closebtn" onclick="this.parentElement.style.display='one';">&times;</span>
				<strong><?php echo $errores; ?></strong>
			</div>
		<?php endif; ?>
		<!-- Contenedor Errores -->
		<div class="add"> <!-- Contenedor Editar Admin -->
			<h2>Editar Administrador</h2>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="hidden" name="id" value="<?php echo $ad['id']; ?>">
				<div class="form-group"> <!-- Conjunto 1 -->
					<div class="conj-1"> <!-- Grupo 1 -->
						<input type="text" name="nom_edit" class="form-control" value="<?php echo $ad['first_name']; ?>">
					</div> <!-- Grupo 1 -->
					<div class="conj-2"> <!-- Grupo 2 -->
						<input type="text" name="app_edit" class="form-control" value="<?php echo $ad['last_name']; ?>">
					</div> <!-- Grupo 2 -->
				</div><br><br> <!-- Conjunto 1 -->
				<div class="conj-3"> <!-- Grupo 3 -->
					<input type="email" name="email_edit" class="form-control" value="<?php echo $ad['email']; ?>" >
				</div> <!-- Grupo 3 -->
				<div class="form-group"> <!-- Conjunto 2 -->
					<div class="conj-4"> <!-- Grupo 4 -->
						<input type="password" name="pass_one_edit" class="form-control" placeholder="Contraseña">
					</div> <!-- Grupo 4 -->
					<div class="conj-5"> <!-- Grupo 5 -->
						<input type="password" name="pass_two_edit" class="form-control" placeholder="Repetir Contraseña">
					</div> <!-- Grupo 5 -->
					<input type="hidden" name="id_rol" value="1">
				</div><br><br><br> <!-- Conjunto 2 -->
				<div class="botones">
					<a href="admin.php" class="button">Cancelar</a>
					<input type="submit" name="reg_admin" class="btn" value="Guardar">
				</div><br><br><br>
			</form>
		</div> <!-- Contenedor Editar Admin -->
	</div> <!-- Contenedor Principal -->
</body>
</html>