<?php

include 'DaoFactura.php';
$insertar_factura = new factura();


$ID_INMUEBLE = $_POST["id_inmueble"];
$ID_PERSONA = $_POST["id_persona"];
$VALOR = $_POST["VALOR"];
$NOMBRE_PERSONA = $_POST["NOMBRE_PERSONA"];
$OBSERVACION = $_POST["OBSERVACION"];


$insertar_factura->set_insertar_factura($ID_INMUEBLE, $ID_PERSONA, $VALOR, $NOMBRE_PERSONA, $OBSERVACION);

?>