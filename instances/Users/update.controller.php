<?php 
include_once("../clases/User.php");
include_once("../funciones/validacion.php");
$user     = new User();

$id       = isset($_POST["id"]) ? $_POST["id"] : null;
$nombre   = isset($_POST["nombre"]) ? $_POST["nombre"] : null;
$apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : null;
$correo   = isset($_POST["correo"]) ? $_POST["correo"] : null;
$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : null;

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!validaRequerido($nombre)) {
		$errors[] = "El campo Nombre es Obligatorio.";
	}

	if (!validaRequerido($apellido)) {
		$errors[] = "El campo Apellido es Obligatorio.";	
	}

	if (!validaRequerido($correo)) {
		$errors[] = "El campo Correo es Obligatorio.";
	}

	if (!validaRequerido($telefono)) {
		$errors[] = "El campo Telefono es Obligatorio.";
	}

	if (strlen($telefono) > 11) {
		$errors[] = "El campo Telefono debe tener una logitud de 11 numeros.";	
	}

	if (!$errors) {
		$user->update($id, $nombre, $apellido, $correo, $telefono)->redirectTo("../index.php");
	}
	
}