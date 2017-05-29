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
        if (isset($_SESSION["USUARIO"])  &&  $_SESSION["ROL_USUARIO"] == "superAdmin" ) {
            
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
                    
                    <li role="presentation" ><a href="../Secretaria/VerSecretaria.php">Secretarios</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        </div>
    </header>
    <script src="ajax.js" type="text/javascript"></script>
</head> 
<?php
include 'DaoSecretaria.php';

if (isset($_POST["bot_actualizar"])) {

    $ID_PERSONA = $_POST["ID_PERSONA"];
    $CONTRASENA = md5($_POST["CONTRASENA"]);



    $modifica = new personas();
    $modifica->set_actualizar_contrasena_secretaria($ID_PERSONA, $CONTRASENA);
} else {

    $ID_PERSONA = $_GET["ID_PERSONA"];
    $CONTRASENA = $_GET["CONTRASENA"];
}
?>
<body>
    </BR>
    </br>
    </br>
<body class="blurBg-false" style="background-color:#ffffff">
    <div class="contenedor">

        <form class="formoid-solid-red"name="formulariocontrasenasecretaria" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" ><div class="title"><h1>Modificar Contraseña Secretaria</h1></div>
            <input class="large" type="hidden" name="ID_PERSONA" required="required" placeholder="Usuario" value="<?php echo $ID_PERSONA; ?>"/>

            <div class="element-separator"><hr><h3 class="section-break-title">Contraseña Nueva</h3></div>

            <div class="element-password"><label class="title"></label><div class="item-cont"><input class="large" type="password" name="CONTRASENA"   maxlength="30" required="required" value="" placeholder="Password" /><span class="icon-place">Las contraseñas deben contener al menos diez caracteres, incluyendo  minúsculas y números</span></div></div>

            <div class="element-separator"><hr><h3 class="section-break-title">Confirmar Contraseña</h3></div>
            <div class="element-password"><label class="title"></label><div class="item-cont"><input class="large" type="password" name="CONTRASENACONFIRMAR" required="required"value="" placeholder="Password"/><span class="icon-place"></span></div></div>         

            <div class="submit"><input type="submit" onclick="return confirmation(event)" name="bot_actualizar" id="bot_actualizar"  value="Actualizar"/></div></form>
        <script type="text/javascript">

            function confirmation() {
                if (formulariocontrasenasecretaria.CONTRASENA.value.length < 10) {
                    alert('Escribe más de 10 carácteres.');
                    return (false);
                }
                re = /[a-z]/;
                if (!re.test(formulariocontrasenasecretaria.CONTRASENA.value)) {
                    alert("Error: La contraseña debe contener al menos una letra minúscula (a-z)!");

                    return false;
                }
                re = /[0-9]/;
                if (!re.test(formulariocontrasenasecretaria.CONTRASENA.value)) {
                    alert("Error: La contraseña debe contener al menos un número(0-9)!");
                  
                    return false;
                }
                if (formulariocontrasenasecretaria.CONTRASENA.value !== formulariocontrasenasecretaria.CONTRASENACONFIRMAR.value) {
                    alert("La contraseña confirmada no concuerda con la contraseña escrita");

                    return (false);
                }
                else
                {
                    if (confirm("Realmente desea modificar secretaria?"))
                    {
                    alert(" La contraseña modificada con exito!");
                    return true;
                     
                     }
                return false;

                }
            


            }



        </script>
        <p>&nbsp;</p>
    </div>

        <footer class="site-footer">
            <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="CrearBus.jsp#" title="Subir" class="go-top"></a></div></center>
        </footer> 

        <script type="text/javascript" src="../../node_modules/jquery/dist/jquery.min.js"></script>    
        <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
