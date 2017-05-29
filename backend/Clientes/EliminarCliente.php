<html>

    <?php
    
    include 'DaoCliente.php';

    $id=$_GET["id"];

    $eliminar_persona=new personas();
    $eliminar_persona->set_eliminacion_persona($id);
     
    ?>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inmobiliaria</title>

    <!-- Bootstrap Core CSS --> 
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head> 

    <div class="page-header">
    <h1 >
        Esta intentando Eliminar un cliente con un inmueble ya asociado!
    </h1>
        <small class="lead">¿Desea volver 
            Donde estaba anteriormente?
        </small>
        <a href="javascript:history.back(1)">
        <button class="btn btn-danger">
                Volver
        </button>
        </a>
    </div>   

 
</html>