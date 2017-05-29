<?php

include 'procesar_inmueble.php';

$id_ciudad = $_POST["select_id_ciudad"];
$id_persona = $_POST["id_persona"];
$tipo_oferta = $_POST["tipo_oferta"];
$tipo_inmueble = $_POST["tipo_inmueble"];
$barrio = $_POST["barrio"];
$direccion = $_POST["direccion"];
$precio = $_POST["precio"];
$estrato = $_POST["estrato"];
$area = $_POST["area"];
$habitaciones = $_POST["habitaciones"];
$banos = $_POST["banos"];
$estado = $_POST["estado"];
$especificacion = $_POST["especificacion"];

if ($tipo_inmueble == "Lote") {
    $habitaciones2 = "";
    $banos2 = "";

    $insertar_inmueble = new inmueble ();
    $insertar_inmueble->set_insertar_inmueble($id_ciudad, $id_persona, $tipo_oferta, $tipo_inmueble, $barrio, $direccion, $precio, $estrato, $area, $habitaciones2, $banos2, $estado, $especificacion);
} else {

    $insertar_inmueble = new inmueble ();
    $insertar_inmueble->set_insertar_inmueble($id_ciudad, $id_persona, $tipo_oferta, $tipo_inmueble, $barrio, $direccion, $precio, $estrato, $area, $habitaciones, $banos, $estado, $especificacion);
}

$last_id_inmueble = $insertar_inmueble->conexion_db->lastInsertId();


//insertar imagenes 

$directorio_subida = '../../frontend/fotos/';
$directorio_grabar = 'fotos/'; 
$total = count($_FILES['imagen']['name']);


for($i=0; $i<$total; $i++){
    
    if($_FILES['imagen']['tmp_name'][$i] != ""){
       
        $resultados =  $insertar_inmueble->conexion_db->query("show table STATUS LIKE 'imagenes'");
        $resultados = $resultados->fetch(PDO::FETCH_ASSOC);
        $nombre_imagen = $resultados['Auto_increment'];
        $tipo_imagen = end(explode('.',$_FILES['imagen']['name'][$i]));
        $nombre_imagen = $nombre_imagen . "." . $tipo_imagen;
        move_uploaded_file($_FILES['imagen']['tmp_name'][$i],$directorio_subida . $nombre_imagen);
        $insertar_inmueble->set_insertar_imagen($last_id_inmueble,$directorio_grabar . $nombre_imagen);

        header('Location:Listar_Inmueble.php');
    }
}

?>