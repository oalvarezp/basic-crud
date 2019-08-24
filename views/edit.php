<?php require_once("../instances/Users/find.controller.php"); ?>
<?php require_once("../instances/Users/update.controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Usuario</title>
	<link rel="stylesheet" type="text/css" href="../public/css/materialize.min.css">
</head>
<body>
	<div class="contaner">
		<div class="row">
			<div class="col m6 offset-m3">
				<div class="card-panel z-depth-3">
					<h4 class="center-align">Actualizar Usuario</h4><hr>
					<?php include("../partials/errors.php"); ?>
					<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
						<div class="input-field">
							<label for="">Nombre</label>
							<input type="text" name="nombre" value="<?php echo $users[0]["nombre"] ?>">
						</div>
						<div class="input-field">
							<label for="">Apellido</label>
							<input type="text" name="apellido" value="<?php echo $users[0]["apellido"] ?>">
						</div>
						<div class="input-field">
							<label for="">Correo o E-mail</label>
							<input type="email" name="correo" value="<?php echo $users[0]["correo"] ?>">
						</div>
						<div class="input-field">
							<label for="">Telefono</label>
							<input type="text" name="telefono" value="<?php echo $users[0]["telefono"] ?>">
						</div>
						<input class="waves-effect indigo darken-4 btn" type="submit" name="editar" value="Actualizar">
						<a class="waves-effect blue lighten-1 btn" href="../index.php">Volver a listado</a>
						<input type="hidden" name="id" value="<?php echo $users[0]["id"] ?>">
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="../public/js/jquery.min.js"></script>
	<script src="../public/js/materialize.min.js"></script>
</body>
</html>