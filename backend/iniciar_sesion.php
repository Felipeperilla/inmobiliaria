<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS --> 
    <link href="../node_modules/bootstrap/dist/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Codigo estilos formularios-->
    <link href="../frontend/estilos/formularios/formoid-solid-red.css" rel="stylesheet" type="text/css"/>    
    <script src="../frontend/estilos/formularios/formoid-solid-red.js" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    
                    <li role="presentation" ><a href="../frontend">Home</a></li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Categorias <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu">
                                <li><a href="../frontend/#!/casas">Casas</a></li>
                                <li><a href="../frontend/#!/apartamentos">Apartamentos</a></li>
                            <li role="separator" class="divider"></li>
                                <li><a href="../frontend/#!/lotes">Lotes</a></li>                
                                <li><a href="../frontend/#!/fincas">Fincas</a></li>
                            </ul>
                    </li>
                    <li role="presentation"><a href="../frontend/contacto.html">Contactos</a></li>
                    <li role="presentation" class="active"><a ng-href="../backend/iniciar_sesion.php">Iniciar Sesión</a><li>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<br>
<br>
<body class="blurBg-false" style="background-color:#FFF">

        <div id="login">
            <form class="formoid-solid-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px " action="controlador_comprobar.php" method="post">
                <div class="title">
                    <h1 color="white">Iniciar Sesión</h1>
                </div>
                <div class="element-separator"><hr><h3 class="section-break-title">Nombre usuario</h3></div>
                <div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="NOMBRE_USUARIO" required="required" placeholder="Usuario"/><span class="icon-place"></span></div></div>

                <div class="element-separator"><hr><h3 class="section-break-title">Contraseña Usuario</h3></div>
                <div class="element-password"><label class="title"></label><div class="item-cont"><input class="large" type="password" name="CONTRASENA" value="" required="required"placeholder="Password"/><span class="icon-place"></span></div></div>
                <div class="submit"><input name="enviar" type="submit" value="Entrar"/>
        
            </form></div><p class="frmd"><a href="http://formoid.com/v29.php">php contact form</a> Formoid.com 2.9</p><script type="text/javascript" src="iniciosesion_files/formoid1/formoid-solid-red.js"></script>
            <!-- Stop Formoid form-->
                    
            <!-- Start Formoid form-->
        </div>

        <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>    
        <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../node_modules/angular/angular.min.js"></script>
        <script type="text/javascript" src="../node_modules/angular-route/angular-route.min.js"></script>
        <script type="text/javascript" src="../node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js"></script>
        <!--code-app-->
        <script type="text/javascript" src="index.js"></script>    
        <script type="text/javascript" src="controllers/ctlHome.js"></script>
        <script type="text/javascript" src="controllers/ctlCasas.js"></script>
        <script type="text/javascript" src="controllers/ctlApartamentos.js"></script>
        <script type="text/javascript" src="controllers/ctlFincas.js"></script>
        <script type="text/javascript" src="controllers/ctlLotes.js"></script>
</body>
</html>
