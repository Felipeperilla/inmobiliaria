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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
        session_start();
        if (isset($_SESSION["USUARIO"])  &&  $_SESSION["ROL_USUARIO"] == "superAdmin" ) {
            
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
                    
                    <li role="presentation" class="active"><a href="#/">Home</a></li>

                    <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION["USUARIO"]?> <span class="caret"></span>
                    </a>
                        <ul class="dropdown-menu"> 
                            <li><a href="../backend/Administrador/CrearAdministrador.php">Registrar Administrador</a></li>
                            <li><a href="../backend/Administrador/VerAdministrador.php">Administradores</a></li>
                            <li role="separator" class="divider"></li>
                            <li role="presentation" class="active"><a href="../backend/cerrar_sesion.php">Cerrar Sesión</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div ng-view></div>
     
        <!--node-modules-->

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
