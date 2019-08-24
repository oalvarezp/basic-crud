<?php
include_once("../../clases/User.php");
$user     = new User();
$id = $_GET["id"];
$user->delete($id)->redirectTo("../../index.php");