<?php
    
    include 'DaoAdministrador.php';

    $id=$_GET["id"];

    $eliminar_administrador=new personas();
    $eliminar_administrador->set_eliminacion_administrador($id);//probar con id que se obtiene por el metodo get 
  

?>
