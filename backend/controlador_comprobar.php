<?php
include 'procesar_login.php';

$usuario = $_POST["NOMBRE_USUARIO"];
$password = md5($_POST["CONTRASENA"]);

//$rol = new login();
//$array_rol = $rol->get_rol_usuario($usuario,$password);
//$rol_user = $array_rol->ROL;
//$rol_usuario = (string) $rol_user;

$login = new login();
$login->get_login($usuario, $password);
?>


<script>
location.href="iniciar_sesion.php";
</script>