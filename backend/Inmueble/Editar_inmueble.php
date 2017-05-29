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
        if (isset($_SESSION["USUARIO"])  &&  $_SESSION["ROL_USUARIO"] == "Secretaria" ) {
            
        }
        if (isset($_SESSION["USUARIO"])  &&  $_SESSION["ROL_USUARIO"] == "Administrador" ) {
            
        }

        else{            
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
                    
                    <li role="presentation" ><a href="Listar_Inmueble.php">Inmuebles</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<?php
include 'procesar_inmueble.php';
if (isset($_POST["bot_actualizar"])) {
    $id = $_POST["id"];
    $tipo_oferta = $_POST["tipo_oferta"];
    $tipo_de_inmueble = $_POST["tipo_de_inmueble"];
    $barrio = $_POST["barrio"];
    $direccion = $_POST["direccion"];
    $precio = $_POST["precio"];
    $estrato = $_POST["estrato"];
    $area = $_POST["area"];
    $numero_de_habitaciones = $_POST["numero_de_habitaciones"];
    $numero_de_banos = $_POST["numero_de_banos"];
    $estado_del_inmueble = $_POST["estado_del_inmueble"];
    $especificacion = $_POST["especificacion"];

    $sql = new inmueble();
    $sql->set_actualizar_inmueble($id, $tipo_oferta, $tipo_de_inmueble, $barrio, $direccion, $precio, $estrato, $area, $numero_de_habitaciones, $numero_de_banos, $estado_del_inmueble, $especificacion);
} else {
    $id = $_GET["id"];
    $tipo_oferta = $_GET["tipo_oferta"];
    $tipo_de_inmueble = $_GET["tipo_de_inmueble"];
    $barrio = $_GET["barrio"];
    $direccion = $_GET["direccion"];
    $precio = $_GET["precio"];
    $estrato = $_GET["estrato"];
    $area = $_GET["area"];
    $numero_de_habitaciones = $_GET["numero_de_habitaciones"];
    $numero_de_banos = $_GET["numero_de_banos"];
    $estado_del_inmueble = $_GET["estado_del_inmueble"];
    $especificacion = $_GET["especificacion"];
}
?>

<body>
<div class="contenedor" style=" height:2000px">  
        <body class="blurBg-false" style="background-color:#FFFFFF">
    <p>&nbsp;</p>
    <form class="formoid-solid-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><div class="title"><h1>Modificar Inmueble</h1></div>
        <table width="25%" border="0" align="center">
            <tr>
                <td></td>
                <td><label for="id"></label>
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"></td>
            </tr>

            <div class="element-separator"><hr><h3 class="section-break-title">Tipo Oferta</h3></div>
            <div class="element-select"><label class="title"></label>
                <div class="item-cont"><div class="large"><span>
                            <select name="tipo_oferta">
                                <option value="<?php echo $tipo_oferta ?>"><?php echo $tipo_oferta ?></option>
                                <option value="Permuta">Permuta</option>
                                <option value="Empeño">Empeño</option>
                                <option value="Venta">Venta</option>
                            </select>
                            <i></i><span class="icon-place"></span>
                        </span></div>
                </div>
            </div>

            <div class="element-separator"><hr><h3 class="section-break-title">Tipo Inmueble</h3></div> 
            <div class="element-select"><label class="title"></label>
                <div class="item-cont"><div class="large"><span>
                            <select name="tipo_de_inmueble" onchange="ocultar()" >
                                <option value="<?php echo $tipo_de_inmueble ?>"><?php echo $tipo_de_inmueble ?></option>
                                <option value="Casa">Casa</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Finca">Finca</option>
                                <option value="Lote">Lote</option>
                            </select>
                            <i></i><span class="icon-place">

                            </span>
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="element-separator"><hr><h3 class="section-break-title">Barrio</h3></div>
            <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="barrio" required="required" placeholder="Usuario" value="<?php echo $barrio; ?>"/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Dirección</h3></div>
            <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="direccion" required="required" placeholder="Usuario" value="<?php echo $direccion; ?>"/><span class="icon-place"></span></div></div>
                 
            <div class="element-separator"><hr><h3 class="section-break-title">Precio</h3></div>
            <div class="element-number"><label class="title"><span class="required">*</span></label>
                <div class="item-cont"><input class="large" type="text" name="precio" required="required" onkeyup="format(this)"  maxlength="50" placeholder="Usuario" value="<?php settype($precio,"float"); echo $precio  ?>"/>
                <span class="icon-place"></span>
            </div>
            </div>
            
            <div class="element-separator"><hr><h3 class="section-break-title">Estrato</h3></div>
            <div class="element-number"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="number" name="estrato" required="required"  placeholder="Usuario" value="<?php settype($estrato,"integer"); echo $estrato ?>"/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Area</h3></div>
            <div class="element-number"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="number" name="area" required="required" placeholder="Usuario" value="<?php settype($area,"float"); echo $area; ?>"/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Habitaciones</h3></div>
            <div class="element-number"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="number" name="numero_de_habitaciones" required="required" placeholder="Usuario" value="<?php settype($numero_de_habitaciones,"integer"); echo $numero_de_habitaciones;?>"/><span class="icon-place"></span></div></div>

            <div class="element-separator"><hr><h3 class="section-break-title">Baños</h3></div>
            <div class="element-number"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="number" name="numero_de_banos" required="required" placeholder="Usuario" value="<?php settype($numero_de_banos,"integer"); echo $numero_de_banos;?>"/><span class="icon-place"></span></div></div>

            <div class="element-separator"><hr><h3 class="section-break-title">Estado</h3></div>
            <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="estado_del_inmueble" required="required" placeholder="Usuario" value="<?php echo $estado_del_inmueble; ?>"/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Especificación</h3></div>  
            <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="especificacion" required="required" placeholder="Usuario" value="<?php echo $especificacion; ?>"/><span class="icon-place"></span></div></div>
            <div class="submit"><input type="submit" onclick="return validar_campos(event)" onclick="return validarSiNumero(event)"id="bot_actualizar" name="bot_actualizar" value="Actualizar"/></div></form>




        <footer class="site-footer">
            <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="CrearBus.jsp#" title="Subir" class="go-top"></a></div></center>
        </footer> 
            <script type="text/javascript" src="../../node_modules/jquery/dist/jquery.min.js"></script>    
            <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../../node_modules/angular/angular.min.js"></script>
            <script type="text/javascript" src="../../node_modules/angular-route/angular-route.min.js"></script>
            <script type="text/javascript" src="../../node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js"></script>
            <script>
                function format(input)
                {
                    var num = input.value.replace(/\./g , '');
                    if (!isNaN(num)) {
                        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
                        num = num.split('').reverse().join('').replace(/^[\.]/, '');
                        input.value = num;
                    }

                    else {
                        alert('Solo se permiten numeros');
                        input.value = input.value.replace(/[^\d\.]*/g, '');
                    }
                }
            </script>
    </body>        

</html>