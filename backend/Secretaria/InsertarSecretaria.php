<?php

include 'DaoSecretaria.php';
$insertar_secretaria = new personas();
$validar_secretaria = new personas();

$NOMBRE_USUARIO = $_POST["NOMBRE_USUARIO"];
$ROL = $_POST["ROL"];
$DOCUMENTO = $_POST["DOCUMENTO"];
$TELEFONO = $_POST["TELEFONO"];
$CONTRASENA = md5($_POST["CONTRASENA"]);
$CONFIRMAR = $_POST["CONFIRMAR"];


$insertar_secretaria->set_insertar_secretaria($NOMBRE_USUARIO, $ROL, $DOCUMENTO, $TELEFONO, $CONTRASENA);
?>