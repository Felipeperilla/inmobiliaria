<?php
	include 'procesar_login.php';

	$usuario=htmlentities(addslashes($_POST["NOMBRE_USUARIO"]));	
	$password=htmlentities(addslashes($_POST["CONTRASENA"]));

	$login= new login();
	$array = $login->get_login($usuario,$password);

	foreach ($array as $key) {
		echo $key->NOMBRE_USUARIO;
	}
?>