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

            if(isset($_SESSION["USUARIO"]))
            {
                if($_SESSION["ROL_USUARIO"] == "Secretaria")
                {

                }
                else
                {
                    if($_SESSION["ROL_USUARIO"] == "Administrador")
                    {

                    }
                    else
                    {
                        header("location:../backend/iniciar_sesion.php");
                    }
                }
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
                        
                        <li role="presentation" ><a href="../../frontend/index_admin.php">Home</a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Categorias <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">
                                    <li><a href="../../frontend/index_admin.php#!/casas">Casas</a></li>
                                    <li><a href="../../frontend/index_admin.php#!/apartamentos">Apartamentos</a></li>
                                <li role="separator" class="divider"></li>
                                    <li><a href="../../frontend/index_admin.php#!/lotes">Lotes</a></li>                
                                    <li><a href="../../frontend/index_admin.php#!/fincas">Fincas</a></li>
                                </ul>
                        </li>

                        <li role="presentation" class="dropdown" >
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Clientes <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">                            
                                    <li><a href="../clientes/CrearCliente.php">Ingresar Cliente</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../clientes/ListarClientes.php">Ver Clientes</a></li>       
                                </ul>    
                        </li>

                        <li>
                            <a href="../Inmueble/Listar_inmueble.php">Inmuebles</a>
                        </li>

                        <li>
                            <a href="../Facturas/ListarFacturas.php">Facturas</a>        
                        </li>                        

                            <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION["USUARIO"]
                            ?> <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu"> 
                                <?php
                                if($_SESSION["ROL_USUARIO"] == "Administrador")
                                { 
                                ?>
                                    <li><a href="../Secretaria/CrearSecretaria.php">Registrar Secretaria</a></li>
                                    <li><a href="../Secretaria/CrearSecretaria.php">Ver Secretarias</a></li>
                                <?php
                                }                                    
                                ?>    
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
        
        </br>
        

    <body>

        <div >
            <table>
                <tr>
                    <td>
                        <button id="btnApply" class="btn btn-warning">ver</button>                        
                    </td>
                    <td>
                        <input id="pglmt"    class="form-control">
                    </tr>
                <tr>
                    <div class="input-group"> <span class="input-group-addon">Buscar</span>
                        <input id="filtrar" type=search  width="300px" placeholder="Ingresa el cliente que deseas buscar">                    
                    </div>
                    <br>
                </tr>
            </table>

    <form method="post" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validarForm(this)">    
        <table id="table1" class="table table-hover"  style="text-align:left">

        <thead>
            <tr>
                <th colspan="7" scope="col"><H3 style="color:#fff"><center>FACTURAS</center></H3></th>
            </tr>

        <th>Nombre  Cliente</th>
        <th>Nombre Comprador</th>
        <th>Tipo_oferta</th>
        <th>Valor</th>
        <th>Observacion</th>
        <th>Fecha</th>

        <th><img id="imgUsuario"src="../../frontend/imagenes/file.png" width="35px"  height="22px"alt=""/></th>

        </thead>
        <?php
        include 'DaoFactura.php';
        $factura = new factura();
        $array = $factura->get_facturas();
        foreach ($array as $registro):
        ?>
            <tbody class="buscar">
                <tr>
                    <td><?php echo $registro->NOMBRE; ?> 
                    <?php echo $registro->APELLIDO; ?></td>
                    <td><?php echo $registro->NOMBRE_PERSONA; ?></td>
                    <td><?php echo $registro->TIPO_OFERTA; ?></td>
                    <td><?php echo $registro->VALOR; ?></td>
                    <td><?php echo $registro->OBSERVACION; ?></td>
                    <td><?php echo $registro->FECHA; ?></td>

                    <td class='bot'>
                        <a href="EliminarFactura.php?id=<?php echo $registro->REGISTRO_VENTA; ?>">
                            <input onclick="return confirmation()" type='button' name='del' id='del' value='Eliminar'>
                        </a>
                        <script type="text/javascript">
                            
                            function confirmation() {
                                if (confirm("Realmente desea eliminar?"))
                                {
                                    return true;
                                }
                                return false;
                            }

                            function confirmation_excel() {
                                if (confirm("Realmente Exportar a Excel?"))
                                {
                                    location.href = "excel.php";
                                }
                                return false;
                            }                            
                        </script>
                    </td>

                </tr>
            </tbody>
            <?php
        endforeach;
        ?>
        </table>
    </form>
        </div>

        <tr>
            <center>
                <td>
                    <button  class="btn btn-success"  onclick="return confirmation_excel()" width="50" >
                    <div >Exportar
                        <img src="../../frontend/imagenes/excel.png">    
                    </div>                                                
                    </button>
                </td>
            </center>
        </tr>

        <footer class="site-footer">
            <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="CrearBus.jsp#" title="Subir" class="go-top"></a></div></center>
        </footer> 

        <script type="text/javascript">
            $(function () {
                $("#table1").hpaging({"limit": 8});
            });

            $("#btnApply").click(function () {
                var lmt = $("#pglmt").val();
                $("#table1").hpaging("newLimit", lmt);
            });
        </script>

        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>

           
        <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>


