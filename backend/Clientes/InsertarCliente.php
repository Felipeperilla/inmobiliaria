<?php
    include 'DaoCliente.php';
    $insertar_persona_formulario = new personas(); 


    $nombre=$_POST["nombre"];
  	$apellido=$_POST["apellido"];
  	$direccion=$_POST["direccion_persona"];
 	$documento=$_POST["documento"];
 	$telefono=$_POST["telefono"];
	$ROL=$_POST["ROL"];
 	

 	

  	$insertar_persona_formulario->set_insertar_persona($nombre,$apellido,$direccion,$documento,$ROL,$telefono);
      
?>