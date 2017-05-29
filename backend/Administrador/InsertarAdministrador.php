<?php

include 'DaoAdministrador.php';
$insertar_administrador = new personas();


$NOMBRE_USUARIO = $_POST["NOMBRE_USUARIO"];
$ROL = $_POST["ROL"];
$DOCUMENTO = $_POST["DOCUMENTO"];
$TELEFONO = $_POST["TELEFONO"];
$CONTRASENA = md5($_POST["CONTRASENA"]);
$CONFIRMAR = $_POST["CONFIRMAR"];


$insertar_administrador->set_insertar_administrador($NOMBRE_USUARIO, $ROL, $DOCUMENTO,$TELEFONO, $CONTRASENA);
?>