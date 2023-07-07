<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POWER GYM</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container"> <!-- Contenedor Principal -->
		<div class="new_user"> <!-- Contenedor Nuevo Miembro -->
			<div class="boton"> <!-- Botón -->
				<a href="members.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i></a>
			</div> <!-- Botón -->
			<div class="container-sm"> <!-- Contenedor Formulario -->
				<h2>Nuevo Miembro</h2>
				<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<div class="group-1"> <!-- Grupo 1 -->
						<div class="row g-3">
							<div class="col-md-6">
								<input type="text" name="name" class="form-control" placeholder="Nombre(s)">
							</div>
							<div class="col-md-6">
								<input type="text" name="last_name" class="form-control" placeholder="Apellidos">
							</div>
						</div>
					</div> <!-- Grupo 1 -->
					<div class="group-2"> <!-- Grupo 2 -->
						<div class="mb-3">
							<input type="email" name="email" class="form-control" placeholder="Correo electrónico">
						</div>
					</div> <!-- Grupo 2 -->
					<div class="group-3"> <!-- Grupo 3 -->
						<div class="row g-3">
							<div class="col-md-6">
								<select name="method" class="form-control">
									<option selected>Método de pago</option>
									<option value="Efectivo">Efectivo</option>
									<option value="Tarjeta">Tarjeta</option>
								</select>
							</div>
							<div class="col-md-6">
								<select name="plan" class="form-control">
									<option selected>Tipo de plan</option>
									<option value="Mensual">Mensual</option>
									<option value="Anual">Anual</option>
								</select>
							</div>
						</div>
					</div> <!-- Grupo 3 -->
					<div class="group-4"> <!-- Grupo 4 -->
						<div class="row g-3">
							<div class="col-md-6">
								<div class="input-group mb-3">
									<input type="text" name="user" class="form-control" placeholder="Usuario">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group mb-3">
									<input type="password" name="password" class="form-control" placeholder="Contraseña" >
								</div>
							</div>
						</div>
					</div><br> <!-- Grupo 4 -->
					<div class="boton"> <!-- Botón -->
						<input type="submit" class="btn btn-primary" value="Agregar">
					</div><br><br> <!-- Botón -->
				</form>
			</div> <!-- Contenedor Formulario -->
		</div> <!-- Contenedor Nuevo Miembro -->
	</div> <!-- Contenedor Principal -->

	<!-- Librerias -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>