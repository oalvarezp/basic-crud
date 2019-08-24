<?php 
include_once("../clases/User.php");
$user = new User();
$id = $_GET["id"];
$users = $user->find($id);