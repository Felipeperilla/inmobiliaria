<?php
    
    include 'procesar_inmueble.php';

    $id=$_GET["id"];

    $eliminar_inmueble=new inmueble();
    $eliminar_inmueble->set_eliminacion_inmueble($id);//probar con id que se obtiene por el metodo get 
  

?>