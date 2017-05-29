<?php
    
    include 'DaoFactura.php';

    $id=$_GET["id"];

    $eliminar_factura=new factura();
    $eliminar_factura->set_eliminacion_factura($id)//probar con id que se obtiene por el metodo get 
  

?>
