
<html>
    <head>
        <title>Inmobiliaria</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="shortcut icon" href="frontend/iconos/inmueble.png"/>	

        <link href="../bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>

        <link href="../estilos/formularios/formoid-solid-red.css" rel="stylesheet" type="text/css"/>
        <script src="../estilos/formularios/formoid-solid-red.js" type="text/javascript"></script>
        <script src="../estilos/formularios/jquery.min.js" type="text/javascript"></script>
        <link href="../estilos/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <script src="sweetalert-master/dist/sweetalert.min.js" type="text/javascript"></script>
        <link href="sweetalert-master/dist/sweetalert.css" rel="stylesheet" type="text/css"/>
    <header id="cabeza">
        <div id="agrupar">

            <img id="imagen_logo" src="../imagenes/imagen_logo.png" alt="" align="LEFT" />    
        </div>

        <div id="agrupar2">
            </br>
            <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"><img src="../imagenes/facebook3.png"  title="Dale click para compartir la pagina en Facebook" border="0" width="30" height="30" alt="Compartir" /></a>
            <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('https://twitter.com/tuplaceapp'');"><img src="../imagenes/Twitter2.png" title="Dale click para compartir la pagina en Twitter" border="0" width="30" height="30" alt="Compartir" /></a>
            <a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"><img src="../imagenes/youtube_2.png" title="Dale click para compartir la pagina en Youtube" border="0" width="30" height="30" alt="Compartir" /></a>
        </div>

        <div id="header">
            <nav> <!-- Aq">ui estamos iniciando la nueva etiqueta nav -->
                <ul class="nav">
                    <li><a href="index_1.php">Inicio</a></li>
                    <li><a href="">Secretaria</a>
                        <ul>
                            <li><a href="">Agregar Secretaria</a></li>
                            <li><a href="">Ver secretarias</a></li>
                        </ul>
                    </li>
                    <li><a href="">Clientes</a>
                        <ul>
                            <li><a href="">Agregar Cliente</a></li>
                            <li><a href="">Ver cliente</a></li>
                        </ul>    
                    </li>

                    <li><a href="">Inmuebles</a></li>

                    <li><a href="">Facturas</a>
                    </li>

                </ul>
            </nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->

        </div>
    </header>
    <script src="ajax.js" type="text/javascript"></script>
</head> 
<?php
include 'DaoSecretaria.php';

if (isset($_POST["bot_actualizar"])) {

    $ID_PERSONA = $_POST["ID_PERSONA"];
    $NOMBRE_USUARIO = $_POST["NOMBRE_USUARIO"];
    $DOCUMENTO = $_POST["DOCUMENTO"];
    $TELEFONO = $_POST["TELEFONO"];


    $modifica = new personas();
    $modifica->set_actualizar_Secretaria($ID_PERSONA, $NOMBRE_USUARIO, $DOCUMENTO, $TELEFONO);
} else {

    $ID_PERSONA = $_GET["ID_PERSONA"];
    $NOMBRE_USUARIO = $_GET["NOMBRE_USUARIO"];
    $DOCUMENTO = $_GET["DOCUMENTO"];
    $TELEFONO = $_GET["TELEFONO"];
}
?>
<body>
    </BR>
    </br>
    </br>
    <div class="contenedor" style=" height:1030px">  
        <body class="blurBg-false" style="background-color:#ffffff">
            <div class="contenedor">

                <form name="formularioSecretariaModificar" class="formoid-solid-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><div class="title"><h1>Modificar Secretaria</h1></div>
                    <input class="large" type="hidden" name="ID_PERSONA" required="required" placeholder="Usuario" value="<?php echo $ID_PERSONA; ?>"/>
                    <div class="element-separator"><hr><h3 class="section-break-title">Nombre Usuario</h3></div>
                    <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="NOMBRE_USUARIO" required="required" placeholder="Usuario" value="<?php echo $NOMBRE_USUARIO; ?>"/><span class="icon-place"></span></div></div>
                    <div class="element-separator"><hr><h3 class="section-break-title">Documento Usuario</h3></div>
                    <div class="element-number"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="DOCUMENTO" required="required" readonly=""placeholder="Documento de Identificacion" value="<?php echo $DOCUMENTO; ?>"/><span class="icon-place"></span></div></div>
                    <div class="element-separator"><hr><h3 class="section-break-title">Telefono Secretaria</h3></div>
                    <div class="element-phone"><label class="title"></label><div class="item-cont"><input class="large" type="tel"  maxlength="10" name="TELEFONO" placeholder="Digita el numero de la secretaria." value="<?php echo $TELEFONO; ?>"/><span class="icon-place"></span></div></div>
                    <div class="submit"><input onclick="return confirmation()"type="submit" name="bot_actualizar" id="bot_actualizar"  value="Actualizar"/></div></form>
            
                   <script language="JavaScript">
                function confirmation()
                {
                    if (document.formularioSecretariaModificar.NOMBRE_USUARIO.value.length == 0) {
                        alert("Tiene que escribir su nombre de usuario")
                        document.formularioSecretariaModificar.NOMBRE_USUARIO.focus()
                        return (false);
                    }
                    if (document.formularioSecretariaModificar.DOCUMENTO.value.length == 0) {
                        alert("Tiene que escribir su numero de documento")
                        document.formularioSecretariaModificar.DOCUMENTO.focus()
                        return (false);
                    }
                    if (document.formularioSecretariaModificar.TELEFONO.value.length == 0) {
                        alert("Tiene que escribir su numero de telefono")
                        document.formularioSecretariaModificar.TELEFONO.focus()
                        return (false);
                    }
                 
                    re = /^[A-Za-z-1234567890]+$/;
                    if (!re.test(formularioSecretariaModificar.NOMBRE_USUARIO.value)) {
                        alert("Error:El nombre debe tener numeros o letras sin espacios.")
                        document.formularioSecretariaModificar.NOMBRE_USUARIO.focus()
                        return false;
                    }
                     if (document.formularioSecretariaModificar.DOCUMENTO.value.length < 7) {
                                alert("Error: El documento debe tener  mas de 7 digitos!");
                                document.formularioSecretariaModificar.DOCUMENTO.focus()
                                return false;
                            }
                    re = /^[0-9]/;
                    if (!re.test(formularioSecretariaModificar.DOCUMENTO.value)) {
                        alert("Error: El documento debe tener solo números!");

                        return false;
                    }
                    if (!/^3([0-9])*$/.test(document.formularioSecretariaModificar.TELEFONO.value))
                    {
                        alert("El valor " + document.formularioSecretariaModificar.TELEFONO.value + " no es un número celular");
                        return false;
                    }


                    if (formularioSecretariaModificar.TELEFONO.value.length < 10) {
                        alert('El numero de celular debe tener 10 dígitos.');
                          document.formularioSecretariaModificar.TELEFONO.focus()
                        return (false);
                    }



                    else {

                       
                            if (confirm("Realmente desea modificar secretaria?"))
                            {
                                return true;
                            }
                            return false;
                        }
                    }


    </script>

                <p>&nbsp;</p>
            </div>
            <footer id="footer_pie">           

                <footer id="pie">
                    <div id="agrupar" >
                        <div style=text-align: justify class="datos-myg" >
                            </br>
                            <h4>Cont&aacute;ctenos</h4>
                            <p>INMOBILIARIA M & G.</p>
                            <p>DUITAMA-BOYAC&Aacute;<br/>
                                <img id="img-telefono" src="../imagenes/tel.png"/>Cel. 312 327 97 99</p>
                            <img id="img-telefono" src="../imagenes/tel.png"/>Cel. 320 223 46 85 </p> 

                        </div>
                    </div>
                    </br>
                    <div id="agrupar2">
                        <img id="imagen_logo2" src="../imagenes/logooscuro2.png" alt="" />
                    </div>
                    <center><h4 id="derechos">Inmobiliaria M&G Derechos Reservados &copy; 2017</h4></center> 

                </footer>  

            </footer>
            <script src="bootstrap-3.3.7-dist/jquery-3.1.1.js" type="text/javascript"></script>
            <script src="bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>

        </body>
</html>
