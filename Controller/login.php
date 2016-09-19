<?php

session_start();

$nombre = ($_POST["name"]);
$password = ($_POST["password"]);
$email = ($_POST["email"]);

$sentencia="INSERT INTO Usuario (nombre,password,email) VALUES
	('$nombre', '$password', '$email'  )";

require('../Model/database.php');
$objeto=new mysqli($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1);
if($objeto->query($sentencia)){
$_SESSION['login_user'] = true;
header('Location: ../index.php');

    print "<br>Se ha insertado un registro en la base de datos<br>";
}else{
    print "<br>No ha podido insertarse en la base de datos<br>";
    print "<i>Error a:</i> ". $objeto->error;
    exit();
}

$objeto->close();
?>
