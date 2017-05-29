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
                    
                    <li role="presentation" ><a href="../Clientes/ListarClientes.php">Clientes</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php
    include 'DaoCliente.php';

    if (isset($_POST["bot_actualizar"])) {

        $id = $_POST["id"];
        $nombre = $_POST["nom"];
        $apellido = $_POST["ape"];
        $direccion = $_POST["dir"];
        $documento = $_POST["doc"];
        $celular = $_POST["cel"];

        $modifica = new personas();
        $modifica->set_actualizar_persona($id, $nombre, $apellido, $direccion, $documento, $celular);
    } else {

        $id = $_GET["id"];
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $direccion = $_GET["direccion"];
        $documento = $_GET["documento"];
        $celular = $_GET["celular"];
    }
    ?>
    <body>

        <br>
        <br>
        <br>
        <form name="formularioClienteModificar" class="formoid-solid-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><div class="title"><h1 style="color:#fff">Actualizar Cliente</h1></div>
            <tr>
                <td></td>
                <td><label for="id"></label>
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"></td>
            </tr>
            <div class="element-separator">
                <hr><h3 class="section-break-title">Nombre y Apellido *</h3>
            </div>

            <div class="element-name"><label class="title"></label><span class="nameFirst"><input placeholder="Nombre del cliente" onkeyup="javascript:this.value = this.value.toUpperCase();" type="text" size="8" maxlength="30" name="nom" value="<?php echo $nombre; ?>"/><span class="icon-place"></span></span><span class="nameLast" ><input placeholder="Apellido del cliente" onkeyup="javascript:this.value = this.value.toUpperCase();" type="text" size="14" maxlength="30" name="ape" value="<?php echo $apellido; ?>"/><span class="icon-place"></span></span></div>

            <div class="element-separator">
                <hr><h3 class="section-break-title">Direccion *</h3></div>
            <div class="element-input">
                <label class="title"></label><div class="item-cont"><input class="large" maxlength="50" type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" name="dir" placeholder="Direccion" value="<?php echo $direccion; ?>"/>
                    <span class="icon-place"></span>
                </div>
            </div>

            <div class="element-separator">
                <hr><h3 class="section-break-title">Documento</h3></div>
            <div <div class="element-number">
                    <label class="title"></label>
                    <div class="item-cont"><input class="large" type="text"  maxlength="10" name="doc"  placeholder="documento" value="<?php echo $documento; ?>"/>
                        <span class="icon-place"></span></div>
                </div>
                <td><input type="hidden" name="ROL" value="Cliente" ></td> 
                <div class="element-separator">
                    <hr><h3 class="section-break-title">Telefono *</h3></div>

                <div class="element-phone"><label class="title"></label><div class="item-cont"><input class="large" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="10" name="cel" required="required" placeholder="Digita el numero celular del Cliente."  value="<?php echo $celular; ?>"/><span class="icon-place"></span></div></div>

                <div class="submit"><input  onclick="return confirmation()" type="submit" name="bot_actualizar" id="bot_actualizar"  value="Actualizar"/></div></form>

        <p>&nbsp;</p>
        <br>
      
  <script language="JavaScript">
                            function confirmation()
                            {
                            if (document.formularioClienteModificar.nom.value.length == 0) {
                            alert("Tiene que escribir el nombre del cliente  ")
                                    document.formularioClienteModificar.nom.focus()
                                    return (false);
                            }
                            if (document.formularioClienteModificar.ape.value.length == 0) {
                            alert("Tiene que escribir el  apellido del cliente")
                                    document.formularioClienteModificar.ape.focus()
                                    return (false);
                            }
                            if (document.formularioClienteModificar.dir.value.length == 0) {
                            alert("Tiene que escribir la direccion del  cliente")
                                    document.formularioClienteModificar.dir.focus()
                                    return (false);
                            }
                            if (document.formularioClienteModificar.cel.value.length == 0) {
                            alert("Tiene que escribir el telefono celular del  cliente")
                                    document.formularioClienteModificar.cel.focus()
                                    return (false);
                            }
                            re = /^[A-Za-z]+$/;
                                    if (!re.test(formularioClienteModificar.nom.value)) {
                            alert("Error:El nombre del cliente debe tener solo letras sin espacios.")
                                    document.formularioClienteModificar.nom.focus()
                                    return false;
                            }
                            re = /^[A-Za-z]+$/;
                                    if (!re.test(formularioClienteModificar.ape.value)) {
                            alert("Error:El apellido debe tener solo letras sin espacios.")
                                    document.formularioClienteModificar.ape.focus()
                                    return false;
                            }

                            if ((document.formularioClienteModificar.documento.value !== "")) {
                            re = /^[0-9]/;
                                    if (!re.test(formularioClienteModificar.doc.value)) {
                            alert("Error: El documento debe tener solo números sin espacios!");
                                    document.formularioClienteModificar.doc.focus()
                                    return false;
                            }

                            if (document.formularioClienteModificar.doc.value.length < 7) {
                            alert("Error: El documento debe tener  mas de 7 digitos!");
                                    document.formularioClienteModificar.doc.focus()
                                    return false;
                            }

                            }


                            if (formularioClienteModificar.cel.value.length < 10) {
                            alert('El numero de celular debe tener 10 dígitos.');
                                    document.formularioClienteModificar.cel.focus()
                                    return (false);
                            }
                            if (!/^3([0-9])*$/.test(document.formularioClienteModificar.cel.value))
                            {
                            alert("El valor " + document.formularioClienteModificar.cel.value + " no es un número celular");
                                    return false;
                     }



                    else {

                       
                            if (confirm("Realmente desea modificar cliente?"))
                            {
                                return true;
                            }
                            return false;
                        }
                    }
                
        </script>


        <footer class="site-footer">
            <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="CrearBus.jsp#" title="Subir" class="go-top"></a></div></center>
        </footer> 

        <script type="text/javascript" src="../../node_modules/jquery/dist/jquery.min.js"></script>    
        <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../node_modules/angular/angular.min.js"></script>
        <script type="text/javascript" src="../../node_modules/angular-route/angular-route.min.js"></script>
        <script type="text/javascript" src="../../node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js"></script>
        <!--code-app-->
        <script type="text/javascript" src="index.js"></script>    
        <script type="text/javascript" src="controllers/ctlHome.js"></script>
        <script type="text/javascript" src="controllers/ctlCasas.js"></script>
        <script type="text/javascript" src="controllers/ctlApartamentos.js"></script>
        <script type="text/javascript" src="controllers/ctlFincas.js"></script>
        <script type="text/javascript" src="controllers/ctlLotes.js"></script>

    </body>
</html>

