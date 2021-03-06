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
                                <li><a href="../Clientes/CrearCliente.php" class="active">Ingresar Cliente</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="../Clientes/ListarClientes.php">Ver Clientes</a></li>       
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
                        <?php echo $_SESSION["USUARIO"]?> <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu"> 
                                <li><a href="CrearSecretaria.php">Registrar Secretaria</a></li>
                                <li><a href="VerSecretaria.php">Ver Secretarias</a></li>
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

    <body class="blurBg-false" style="background-color:#FFFFFF">
        <br>
        <br>
        <br>
        <form name="formularioSecretaria" class="formoid-solid-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post" action="BuscarSecretaria.php" ><div class="title"><h1 style="color:#fff">Agregar Secretaria</h1></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Nombre Usuario *</h3></div>
            <div class="element-input"><label class="title"><span class="required"></span></label><div class="item-cont"><input class="large" type="text" onpaste="return false" name="NOMBRE_USUARIO" onkeyup="javascript:this.value = this.value.toUpperCase();" id="NOMBRE_USUARIO" maxlength="30" placeholder="Usuario"/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Documento Usuario *</h3></div>
            <div class="element-number"><label class="title"><span class="required"></span></label><div class="item-cont"><input class="large" type="text" onpaste="return false" maxlength="10" name="DOCUMENTO" required="required" placeholder="Documento de Identificacion" value=""/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Telefono Celular *</h3></div>
            <div class="element-phone"><label class="title"></label><div class="item-cont"><input class="large" type="tel" onpaste="return false" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="10" name="TELEFONO" required="required" placeholder="Digita el numero celular de Secretaria." onChange="validarSiNumero(this.value);" value=""/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Contraseña Usuario *</h3></div>
            <div class="element-password"><label class="title"><span class="required"></span></label><div class="item-cont"><input class="large" type="password" onpaste="return false" name="CONTRASENA" value="" required="required" placeholder="Password"/>Las contraseñas deben contener al menos diez caracteres, incluyendo  minúsculas y números<span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Confirmar Contraseña *</h3></div>
            <div class="element-password"><label class="title"><span class="required"></span></label><div class="item-cont"><input class="large" type="password" onpaste="return false" name="CONFIRMAR" value="" required="required" placeholder="Password"/><span class="icon-place"></span></div></div>
            <input type="hidden" name="ROL" value="Secretaria" >
            <div class="submit"><input type="submit" onclick="return validar_campos(event)" onclick="return validarSiNumero(event)" NAME="enviar" value="Agregar"/></div></form>
        <br>
        <br>
        <br>
        <br>

        <footer class="site-footer">
            <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="CrearBus.jsp#" title="Subir" class="go-top"></a></div></center>
        </footer> 
                <script src="../../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
                <script src="../../node_modules/bootstrap/dist/js/bootsrtap.min.js" type="text/javascript"></script>
                <script type="text/javascript" src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>

    <script language="JavaScript">
                function validar_campos()
                {
                    if (document.formularioSecretaria.NOMBRE_USUARIO.value.length == 0) {
                        alert("Tiene que escribir su nombre de usuario")
                        document.formularioSecretaria.NOMBRE_USUARIO.focus()
                        return (false);
                    }
                    if (document.formularioSecretaria.DOCUMENTO.value.length == 0) {
                        alert("Tiene que escribir su numero de documento")
                        document.formularioSecretaria.DOCUMENTO.focus()
                        return (false);
                    }
                    if (document.formularioSecretaria.TELEFONO.value.length == 0) {
                        alert("Tiene que escribir su numero de telefono")
                        document.formularioSecretaria.TELEFONO.focus()
                        return (false);
                    }
                    if (document.formularioSecretaria.CONTRASENA.value.length == 0) {
                        alert("Tiene que escribir su contraseña")
                        document.formularioSecretaria.CONTRASENA.focus()
                        return (false);
                    }
                    if (document.formularioSecretaria.CONFIRMAR.value.length == 0) {
                        alert("Tiene que escribir su confirmación de contraseña")
                        document.formularioSecretaria.CONFIRMAR.focus()
                        return (false);
                    }


                    re = /^[A-Za-z-1234567890]+$/;
                    if (!re.test(formularioSecretaria.NOMBRE_USUARIO.value)) {
                        alert("Error:El nombre debe tener numeros o letras sin espacios.")
                        document.formularioSecretaria.NOMBRE_USUARIO.focus()
                        return false;
                    }
                     if (document.formularioSecretaria.DOCUMENTO.value.length < 7) {
                                alert("Error: El documento debe tener  mas de 7 digitos!");
                                document.formularioSecretaria.DOCUMENTO.focus()
                                return false;
                            }
                    re = /^[0-9]/;
                    if (!re.test(formularioSecretaria.DOCUMENTO.value)) {
                        alert("Error: El documento debe tener solo números!");

                        return false;
                    }
                    if (!/^3([0-9])*$/.test(document.formularioSecretaria.TELEFONO.value))
                    {
                        alert("El valor " + document.formularioSecretaria.TELEFONO.value + " no es un número celular");
                        return false;
                    }


                    if (formularioSecretaria.TELEFONO.value.length < 10) {
                        alert('El numero de celular debe tener 10 dígitos.');
                        return (false);
                    }

                    if (formularioSecretaria.CONTRASENA.value.length < 10) {
                        alert('Escribe más de 10 carácteres en la contraseña.');
                        return (false);
                    }
                    re = /[0-9]/;
                    if (!re.test(formularioSecretaria.CONTRASENA.value)) {
                        alert("Error: La contraseña debe contener al menos un número(0-9)!");

                        return false;
                    }
                    re = /[a-z]/;
                    if (!re.test(formularioSecretaria.CONTRASENA.value)) {
                        alert("Error: La contraseña debe contener al menos una letra minúscula (a-z)!");

                        return false;
                    }
                    if (formularioSecretaria.CONTRASENA.value !== formularioSecretaria.CONFIRMAR.value) {
                        alert("La contraseña confirmada no concuerda con la contraseña escrita");
                        formularioSecretaria.CONFIRMAR.focus();
                        return (false);
                    }


                    else {

                        alert("Secretaria Creada");


                        formularioSecretaria.action = "InsertarSecretaria.php";
                        formularioSecretaria.submit();
                    }
                }




    </script>


</html>
