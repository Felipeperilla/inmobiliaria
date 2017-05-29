<html>
    
<head>
    
        <title>Inmobiliaria</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="../../frontend/estilos/estilo_exportar.css" rel="stylesheet" type="text/css"/>
        <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../node_modules/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../frontend/estilos/formularios/formoid-solid-red.css" rel="stylesheet" type="text/css"/>
        <script src="../../frontend/estilos/formularios/formoid-solid-red.js" type="text/javascript"></script>
        <script src="../../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <link href="../../frontend/estilos/estilo_principal.css" rel="stylesheet" type="text/css"/>
        <link href="../../frontend/estilos/ESTILOTABLADINAMICA.css" rel="stylesheet" type="text/css"/>
           
        <?php
        session_start();

        if (isset($_SESSION["USUARIO"])) {
            
        }
        else{
            header("location:../backend/INICIAR_SESION.php");
        }
        ?>

             
    <header id="cabeza">
        <div id="agrupar">
            <img id="imagen_logo" src="../../frontend/imagenes/imagen_logo.png" alt="" align="LEFT" />                  
        </div>
        <div id="agrupar2">
            <!--<button align="rigth" id="iniciar_sesion"><a align="rigth" href="../backend/iniciar_sesion.php">Iniciar sesión</a></button>
            <button align="rigth" id="cerrar_sesion"><a align="rigth" href="../backend/cerrar_sesion.php">Cerrar sesión</a></button>-->
            <a href="https://www.facebook.com/tuplaceapp/"><img src="../../frontend/imagenes/facebook3.png"  title="Dale click para compartir la pagina en Facebook" border="0" width="30" height="30" alt="Compartir" /></a>
            <a href="https://twitter.com/tuplaceapp"><img src="../../frontend/imagenes/Twitter2.png" title="Dale click para compartir la pagina en Twitter" border="0" width="30" height="30" alt="Compartir" /></a>
            <a href="https://www.youtube.com/channel/UC-Rsrx0tTGmgPifbP2buknQ"><img src="../../frontend/imagenes/youtube_2.png" title="Dale click para compartir la pagina en Youtube" border="0" width="30" height="30" alt="Compartir" /></a>
        </div>

            <div id="header">
                <nav>
                    <ul class="nav">
                        <li><a href="javascript:history.back(-1);" title="Ir la página anterior">Volver</a></li>                        
                        <li><a ng-href="#/">Inmuebles</a>
                            <ul>
                                <li><a href="Listar_Inmueble.php">Inmuebles disponibles</a></li>                                  
                                <li><a href="Listar_Inmueble_Fac.php">Inmuebles Facturados</a></li>                                   
                            </ul>
                        </li>
                        <li><a ng-href="#/"><?php echo $_SESSION["USUARIO"] ?></a>
                            <ul>                           
                                <li><a href="../cerrar_sesion.php">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

</head>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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


<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<link href="../Tiny-jQuery-Pagination-Widget-For-HTML-Table-table-hpaging/paging.css" rel="stylesheet" type="text/css"/>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../Tiny-jQuery-Pagination-Widget-For-HTML-Table-table-hpaging/scripts/jquery.table.hpaging.min.js" type="text/javascript"></script>


</head>
</head>

</head> 
<br>
<table>
    <tr>
        <td>
            <button id="btnApply" class="btn btn-danger">ver</button>
        </td>

        <td>
            <input id="pglmt"    class="form-control">


    </tr>

    <br>
    <tr>
    <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type=search  width="300px" placeholder="Ingresa la Factura que deseas buscar">
        <button  class="button green"  onclick="return confirmation_excel()" >
            <div class="title">Exportar</div>
            <img src="../../frontend/imagenes/excel.png" alt=""/>

        </button>
    </div>
    <br>
    </tr>

</table>
    <br>

<form method="post" name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validarForm(this)">    
    <table id="table1" class="table table-hover"  style="text-align:left">
    
               
                <thead>
              <tr>
                <th colspan="18" scope="col"><H3 style="color:#fff"><center>INMUEBLES FACTURADOS</center></H3></th>
        </tr>
                <th>Nombre</th>
                <th >Apellido</th>
                <th >Cdad.</th>
                <th >Tp Oferta</th>
                <th >Tp Inmueble</th>
                <th >B.º</th>
                <th >Dir.</th>
                <th >Precio</th>
                <th >Estrato</th>
                <th >Aréa</th>
                <th >Habitaciones</th>
                <th >Baños</th>
                <th >Edo. Inmueble</th>
                <th >Especificacion</th>
                <th ><img src="../../frontend/imagenes/house (1).png" width="35px"  height="22px" alt=""/></th>

                <th ><img src="../../frontend/imagenes/house.png" width="35px"  height="22px"alt=""/></th>   

               
                </thead>
                <?php
                include 'procesar_inmueble_Fac.php';
                $inmueblefac = new inmueblefac();

                $array = $inmueblefac->get_inmueblesFac();
                foreach ($array as $registro):
                    ?>

                    <tbody class="buscar">
                        <tr>
                         
                            <td><?php echo $registro->NOMBRE; ?></td>
                            <td><?php echo $registro->APELLIDO; ?></td>
                            <td><?php echo $registro->NOMBRE_CIUDAD; ?></td>
                            <td><?php echo $registro->tipo_oferta; ?></td>
                            <td><?php echo $registro->tipo_de_inmueble; ?></td>
                            <td><?php echo $registro->barrio; ?></td>
                            <td><?php echo $registro->direccion; ?></td>
                            <td><?php echo $registro->precio; ?></td>
                            <td><?php echo $registro->estrato; ?></td>
                            <td><?php echo $registro->area; ?></td>
                            <td><?php echo $registro->numero_de_habitaciones; ?></td>
                            <td><?php echo $registro->numero_de_banos; ?></td>
                            <td><?php echo $registro->estado_del_inmueble; ?></td>
                            <td><?php echo $registro->especificacion; ?></td>


                            <td class='bot'>
                                <a href="Eliminar_Inmueble.php?id=<?php echo $registro->id_inmueble; ?>">
                                    <input type='button' onclick="return confirmation()" name='del' id='del' value='Eliminar'>
                               
                                </a>
                                  <script type="text/javascript">
                            <!--
                            function confirmation() {
                                if (confirm("Realmente desea eliminar?"))
                                {
                                    return true;
                                }
                                return false;
                            }
                            
                                 function confirmation_excel() {
                                if (confirm("Realmente desea Exportar a Excel?"))
                                {
                                    location.href="excel.inmueblesfac.php";
                                }
                                return false;
                            }
                          
                            //-->
                        </script>
                            </td>



                            <td class="bot"><a href="Editar_inmueble.php?id=<?php echo $registro->id_inmueble; ?> & nombre=<?php echo $registro->nombre; ?> & apellido=<?php echo $registro->apellido; ?> & tipo_oferta=<?php echo $registro->tipo_oferta; ?> & tipo_de_inmueble=<?php echo $registro->tipo_de_inmueble; ?> & barrio=<?php echo $registro->barrio; ?> & direccion=<?php echo $registro->direccion; ?> & precio=<?php echo $registro->precio; ?> & estrato=<?php echo $registro->estrato; ?> & area=<?php echo $registro->area; ?>& numero_de_habitaciones=<?php echo $registro->numero_de_habitaciones; ?> & numero_de_banos=<?php echo $registro->numero_de_banos; ?> & estado_del_inmueble=<?php echo $registro->estado_del_inmueble; ?> & especificacion=<?php echo $registro->especificacion; ?>">
                                    <input type='button' name='up' id='up' value='Modificar'></a>
                          </td>


                        </tr>
                          
                    </tbody>
                    <?php
                endforeach;
                ?>

            </table>
            <footer class="site-footer">
                <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="CrearBus.jsp#" title="Subir" class="go-top"></a></div></center>
            </footer> 
            <script src="bootstrap-3.3.7-dist/jquery-3.1.1.js" type="text/javascript"></script>
            <script src="bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
        $(function () {
            $("#table1").hpaging({ "limit": 15 });
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

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
            </body>




            </html>