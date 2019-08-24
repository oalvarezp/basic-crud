<?php 
include_once("clases/User.php");
$user = new User();
$hasta = 3;

if (isset($_GET["pagina"])) {
	if (is_string($_GET["pagina"])) {
		if (is_numeric($_GET["pagina"])) {
			if ($_GET["pagina"] == 1) {
				$user->redirectTo("index.php");
				die();
			} else {
				$pagina = $_GET["pagina"];
			} 
		} else {
				$user->redirectTo("index.php");
				die();
		}
	} 
} else {
	$pagina = 1;
}

$desde = ($pagina - 1) * $hasta;

$totalRegistros = $user->totalRows();
$totalPaginas = ceil($totalRegistros / $hasta);
$users = $user->index($desde, $hasta);