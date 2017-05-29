   <head>
        <?php
        include '../Enlaces/HeadSuperAdministrador.php';
        ?>
        <script src="ajax.js" type="text/javascript"></script>
    </head>
    <script src="ajax.js" type="text/javascript"></script>
</head> 
<?php
include 'DaoAdministrador.php';

if (isset($_POST["bot_actualizar"])) {

    $ID_PERSONA = $_POST["ID_PERSONA"];
    $NOMBRE_USUARIO = $_POST["NOMBRE_USUARIO"];
    $DOCUMENTO = $_POST["DOCUMENTO"];
    $TELEFONO = $_POST["TELEFONO"];


    $modifica = new personas();
    $modifica->set_actualizar_administrador($ID_PERSONA, $NOMBRE_USUARIO, $DOCUMENTO, $TELEFONO);
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

        <form name="formularioAdministradorModificar"class="formoid-solid-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><div class="title"><h1 style="color:#fff">Modificar Administrador</h1></div>
            <input class="large" type="hidden" name="ID_PERSONA" required="required" placeholder="Usuario" value="<?php echo $ID_PERSONA; ?>"/>
            <div class="element-separator"><hr><h3 class="section-break-title">Nombre Usuario</h3></div>
            <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="NOMBRE_USUARIO" required="required" placeholder="Usuario" value="<?php echo $NOMBRE_USUARIO; ?>"/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Documento Usuario</h3></div>
            <div class="element-number"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="DOCUMENTO" required="required" readonly=""placeholder="Documento de Identificacion" value="<?php echo $DOCUMENTO; ?>"/><span class="icon-place"></span></div></div>
            <div class="element-separator"><hr><h3 class="section-break-title">Telefono Administrador</h3></div>
            <div class="element-phone"><label class="title"></label><div class="item-cont"><input class="large" type="tel"  maxlength="24" name="TELEFONO" placeholder="Digita el numero de el administrador." value="<?php echo $TELEFONO; ?>"/><span class="icon-place"></span></div></div>
            <div class="submit"><input onclick="return confirmation()"type="submit" name="bot_actualizar" id="bot_actualizar"  value="Actualizar"/></div></form>

<script language="JavaScript">
                function confirmation()
                {
                    if (document.formularioAdministradorModificar.NOMBRE_USUARIO.value.length == 0) {
                        alert("Tiene que escribir su nombre de usuario")
                        document.formularioAdministradorModificar.NOMBRE_USUARIO.focus()
                        return (false);
                    }
                    if (document.formularioAdministradorModificar.DOCUMENTO.value.length == 0) {
                        alert("Tiene que escribir su numero de documento")
                        document.formularioAdministradorModificar.DOCUMENTO.focus()
                        return (false);
                    }
                    if (document.formularioAdministradorModificar.TELEFONO.value.length == 0) {
                        alert("Tiene que escribir su numero de telefono")
                        document.formularioAdministradorModificar.TELEFONO.focus()
                        return (false);
                    }
                 
                    re = /^[A-Za-z-1234567890]+$/;
                    if (!re.test(formularioAdministradorModificar.NOMBRE_USUARIO.value)) {
                        alert("Error:El nombre debe tener numeros o letras sin espacios.")
                        document.formularioAdministradorModificar.NOMBRE_USUARIO.focus()
                        return false;
                    }
                     if (document.formularioAdministradorModificar.DOCUMENTO.value.length < 7) {
                                alert("Error: El documento debe tener  mas de 7 digitos!");
                                document.formularioAdministradorModificar.DOCUMENTO.focus()
                                return false;
                            }
                    re = /^[0-9]/;
                    if (!re.test(formularioAdministradorModificar.DOCUMENTO.value)) {
                        alert("Error: El documento debe tener solo números!");

                        return false;
                    }
                    if (!/^3([0-9])*$/.test(document.formularioAdministradorModificar.TELEFONO.value))
                    {
                        alert("El valor " + document.formularioAdministradorModificar.TELEFONO.value + " no es un número celular");
                        return false;
                    }


                    if (formularioAdministradorModificar.TELEFONO.value.length < 10) {
                        alert('El numero de celular debe tener 10 dígitos.');
                          document.formularioAdministradorModificar.TELEFONO.focus()
                        return (false);
                    }



                    else {

                       
                            if (confirm("Realmente desea modificar administrador?"))
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
        <script src="../bootstrap-3.3.7-dist/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>

</body>
</html>
