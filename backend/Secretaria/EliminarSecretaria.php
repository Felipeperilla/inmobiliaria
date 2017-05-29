<?php
    
    include 'DaoSecretaria.php';

    $id=$_GET["id"];

    $eliminar_secretaria=new personas();
    $eliminar_secretaria->set_eliminacion_secretaria($id);//probar con id que se obtiene por el metodo get 
  

?>
