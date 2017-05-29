<html>

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
        $id_inmueble = $_GET["ID_INMUEBLE"];
        $id_persona = $_GET["ID_PERSONA"];

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
                    
                    <li role="presentation" ><a href="../Inmueble/Listar_inmueble.php">Inmuebles</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     
    <body class="blurBg-false" style="background-color:#FFFFFF">

        <input type="hidden" name="ROL" value="Secretaria" >
        </br>
        </BR>
        </BR>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
    <body class="blurBg-false" style="background-color:#EBEBEB">


</body>
        <form name="formularioFactura" class="formoid-solid-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post" action="InsertarFactura.php"  ><div class="title"><h1    style="color:#fff">Agregar Factura</h1></div>
                
            <div class="element-separator">
                <hr><h3 class="section-break-title">Nombre comprador</h3>
            </div>
            <div class="element-input">
                <label class="title"><span class="required">*</span></label><div class="item-cont">
                <input class="large" type="text" maxlength="30" name="NOMBRE_PERSONA" required="" placeholder="Nombre de la persona que compra." value=""/ id="letra"  onkeyup="javascript:this.value = this.value.toUpperCase();">
                <span class="icon-place"></span></div>
            </div>
                
            <div class="element-separator">
                <hr><h3 class="section-break-title">Valor del Inmueble</h3>
            </div>
                <input type="hidden" name="id_inmueble" id="id_inmueble" value="<?php echo $id_inmueble; ?>"></td>
                <input type="hidden" name="id_persona" id="id_persona" value="<?php echo $id_persona; ?>"></td>
                <div class="element-number"><label class="title"><span class="required">*</span></label><div class="item-cont">
                <input class="large" type="number" name="VALOR"  id="VALOR"  placeholder="valor del predio"/ required="" ><span class="icon-place"></span>
                </div>
            </div>
                

            <div class="element-separator">
                <hr><h3 class="section-break-title">Observaciones</h3>
            </div>
                <div class="element-input"><label class="title"></label><div class="item-cont">
                <input class="large" type="text"  maxlength="100" name="OBSERVACION" required="required" placeholder="Observaciones de la compra"  value=""/><span class="icon-place"></span></div>
                </div>  
                <div class="submit">
                <input type="submit" onclick="return validar_campos(event)" onclick="return validarSiNumero(event)" value="Agregar"/>
            </div>

        </form>
            <br>
            <br>
            <br>


            <footer class="site-footer">
                <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="#/" title="Subir" class="go-top"></a></div></center>
            </footer> 
</body>

</html>
