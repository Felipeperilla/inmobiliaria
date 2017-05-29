<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Inmobiliaria</title>

        <!-- Bootstrap Core CSS --> 
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS --> 
        <link href="../../node_modules/bootstrap/dist/css/business-casual.css" rel="stylesheet">

        <!--formularios-->
        <link href="../../frontend/estilos/formularios/formoid-solid-red.css" rel="stylesheet" type="text/css"/>
        <script src="../../frontend/estilos/formularios/formoid-solid-red.js" type="text/javascript"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
            session_start();
            if (isset($_SESSION["USUARIO"])  &&  $_SESSION["ROL_USUARIO"] == "superAdmin" ) 
            {
                
            }
            else
            {            
                header("location:../backend/iniciar_sesion.php");
            }
        ?>
    </head>
    <body>

        <div class="brand">Finca Raíz</div>
        <div class="address-bar">Inmobiliaria M&G | Colombia </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.html">Inmobiliaria M&G</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        
                        <li role="presentation" ><a href="../../frontend/index__super_admin.php">Home</a></li>
                        
                        <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION["USUARIO"]?> <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu"> 
                                <li><a href="CrearAdministrador.php">Registrar Administrador</a></li>
                                <li><a href="VerAdministrador.php">Administradores</a></li>
                                <li role="separator" class="divider"></li>
                                <li role="presentation" class="active"><a href="../cerrar_sesion.php">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <link href="../../frontend/estilos/estilo_exportar.css" rel="stylesheet" type="text/css"/>
        <link href="../../frontend/estilos/ESTILOTABLADINAMICA.css" rel="stylesheet" type="text/css"/>
        
        <script src="../../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS --> 
        <link href="../../node_modules/bootstrap/dist/css/business-casual.css" rel="stylesheet">       

        <link href="../Tiny-jQuery-Pagination-Widget-For-HTML-Table-table-hpaging/paging.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="../Tiny-jQuery-Pagination-Widget-For-HTML-Table-table-hpaging/scripts/jquery.table.hpaging.min.js" type="text/javascript"></script>
        <script type="text/javascript">

      <script type="text/javascript">
        $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });
      </script>    
    </head>
        <script src="ajax.js" type="text/javascript"></script>
   
    <script src="ajax.js" type="text/javascript"></script>
</head> 
<body>

    </br>
    </BR>
     <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type=search  width="300px" placeholder="Ingresa el Administrador que deseas buscar">
      </div>


    <br>
    <br>
    <form method="post" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validarForm(this)">    
        <div class="table-responsive" style="text-align:left">
            <table class="table table-hover" style="text-align:left">

                <thead>
                <th>Nombre Usuario</th>
                <th>documento</th>
                <th>Telefono</th>
                
                <th ><img id="imgUsuario"src="../../frontend/imagenes/usuario.png" width="35px"  height="22px"alt=""/></th>
                
                <th><img id="imgUsuarioM"src="../../frontend/imagenes/navegador.png" width="35px"  height="22px"alt=""/></td></th>
               
                </tr>
</thead>
                <?php
                include 'DaoAdministrador.php';
                $persona = new personas();

                $array = $persona->get_personas();
                foreach ($array as $registro):
                    ?>
                    <tbody class="buscar">
                        <tr>

                            <td><?php echo $registro->NOMBRE_USUARIO; ?></td>
                            <td><?php echo $registro->DOCUMENTO; ?></td>
                            <td><?php echo $registro->TELEFONO; ?></td>
                            



                            <td class='bot'>
                                <a href="EliminarAdministrador.php?id=<?php echo $registro->ID_PERSONA; ?>">
                                    <input onclick="return confirmation()" type='button' name='del' id='del' value='Eliminar'>
                                </a>
                              
<script type="text/javascript">
<!--
function confirmation() {
    if(confirm("Realmente desea eliminar?"))
    {
        return true;
    }
    return false;
}
//-->
</script>

                            </td>

                            
                             <td class="bot"><a href="EditarContrasenaAdministrador.php?ID_PERSONA=<?php echo $registro->ID_PERSONA; ?> & CONTRASENA=<?php echo $registro->CONTRASENA; ?>"><input type='button' name='up' onclick="transformarEnEditable(this)" id='up' value='Modificar'></a></td>
                        </tr>
                    </tbody>
                        <?php
                    endforeach;
                    ?>
            </table>
        </div>
    
    </form>
 
      

        <footer class="site-footer">
            <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="CrearBus.jsp#" title="Subir" class="go-top"></a></div></center>
        </footer> 
           
        <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
