<?php require_once("instances/Users/index.controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD Basico con PHP</title>
	<link rel="stylesheet" type="text/css" href="public/css/materialize.min.css">
</head>
<body>
	<div class="contaner">
		<center><h3>CRUD con PHP & MYSQL PDO</h3></center>
		<div class="row">
			<div class="col m6 offset-m3">
				<a class="waves-effect green darken-3 btn" href="views/create.php">Crear Usuario</a>
				<table class="table bordered centered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th colspan="2">Operaciones</th>
						</tr>
					</thead>
					<tbody>
						<?php if (!$users): ?>
						<tr>
							<td colspan="5">
								<h4>No hay Resultados para Mostrar</h4>
							</td>
						</tr>
					<?php else: ?>
						<?php foreach ($users as $user): ?>
							<tr>
								<td><?php echo $user["nombre"] ?></td>
								<td><?php echo $user["apellido"] ?></td>
								<td><?php echo $user["correo"] ?></td>
								<td><?php echo $user["telefono"] ?></td>
								<td><a class="waves-effect indigo darken-4 btn" href="views/edit.php?id=<?php echo $user["id"] ?>">Editar</a> <a class="waves-effect red darken-4 btn" href="instances/Users/delete.controller.php?id=<?php echo $user["id"] ?>">Eliminar</a></td>
							</tr>
						<?php endforeach ?>
					<?php endif ?>
					</tbody>
				</table>
				<div class="row">
					<div class="col m10 offset-m5">
						<ul class="pagination">
							<?php for($i = 1; $i <= $totalPaginas; $i++): ?>
								<li class="waves-effect"><?php echo "<a href='index.php?pagina=".$i."'>$i</a>" ?></li>
							<?php endfor ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/materialize.min.js"></script>
</body>
</html>