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
        $id_persona = $_GET["id_persona"]; 

        session_start();
        
        if (isset($_SESSION["USUARIO"])  &&  $_SESSION["ROL_USUARIO"] == "Administrador" ) {
            
        }

        else{            
            header("location:../iniciar_sesion.php");
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
    <body class="blurBg-false" style="background-color:#FFFFFF">

        </BR>
        </BR>
        </BR>


        <link rel="stylesheet" href="formularioinmueble_files/formoid1/formoid-solid-red.css" type="text/css" />
        <script type="text/javascript" src="formularioinmueble_files/formoid1/jquery.min.js"></script>
        <form enctype="multipart/form-data"  name="formularioInmueble" class="formoid-solid-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post"  ><div class="title"><h1 style="color:#fff">Agregar Inmueble</h1></div>
           
            <input type="hidden" name="id_persona" value="<?php echo $id_persona; ?>">
            <div class="element-separator"><hr><h3 class="section-break-title">Ciudad</h3></div>
            <div class="element-select"><label class="title"></label>
                <div class="item-cont">
                    <select id="select_id_ciudad" name="select_id_ciudad">
                        <option value="">Seleccione uno</option>
                        <?php
                        require_once 'procesar_ciudad.php';
                        $listar_ciudades = new ciudades();
                        $array = $listar_ciudades->get_ciudades();

                        foreach ($array as $registro) {
                            echo ("<option value=" . $registro->id_ciudad . ">" .$registro->NOMBRE_DEPARTAMENTO." - " .$registro->nombre_ciudad . "</option>");
                        }
                        ?>
                    </select>

                    <div class="large"><span>
                            <i></i><span class="icon-place"></span></span>
                    </div>
                </div>
            </div>
       




            <div class="element-separator"><hr><h3 class="section-break-title">Tipo Oferta</h3></div>
            <div class="element-select"><label class="title"></label>
                <div class="item-cont"><div class="large"><span>
                            <select name="tipo_oferta">
                                <option value="">Seleccione uno</option>
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
                            <select name="tipo_inmueble" onchange="ocultar()" >
                                <option value="">Seleccione uno</option>
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
            <div class="element-input"><label class="title"></label>
                <div class="item-cont"><input class="large" type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" maxlength="30" name="barrio" placeholder="Ubicacion del Inmueble."/>
                    <span class="icon-place">
                    </span>
                </div>
            </div>


            <div class="element-separator"><hr><h3 class="section-break-title">Direccion</h3></div>
            <div class="element-input"><label class="title"></label>
                <div class="item-cont"><input class="large" type="text" onkeyup="javascript:this.value = this.value.toUpperCase();" name="direccion" maxlength="30" placeholder="Ubicacion del Inmueble."/>
                    <span class="icon-place"></span>
                </div>
            </div>

            <div class="element-separator"><hr><h3 class="section-break-title">Precio</h3></div>
            <div class="element-number"><label class="title"></label>
                <div class="item-cont"><input class="large" type="text" onkeyup="format(this)" onchange="format(this)" maxlength="50" name="precio" placeholder="Valor del Inmueble." value=""/>
                    <span class="icon-place"></span>
                </div>
            </div>


            <div class="element-separator"><hr><h3 class="section-break-title">Estrato</h3></div>
            <div class="element-select"><label class="title"></label>
                <div class="item-cont"><div class="large">
                        <span>
                            <select name="estrato" >
                                <option value="">Seleccione uno</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <i></i>
                            <span class="icon-place"></span>
                        </span>
                    </div>
                </div>
            </div>


            <div class="element-separator"><hr><h3 class="section-break-title">Area</h3></div>
            <div class="element-number"><label class="title"></label>
                <div class="item-cont"><input class="large" type="text"  name="area" placeholder="Aréa del inmueble m²." value=""/>
                    <span class="icon-place">
                    </span>
                </div>
            </div>

            <div id="ocultar" style="display:block;" >
                <div class="element-separator"><hr><h3 class="section-break-title">habitaciones</h3></div>
                <div class="element-select"><label class="title"></label>
                    <div class="item-cont"><div class="large">
                            <span>
                                <select name="habitaciones" >
                                    <option value="">Seleccione uno</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <i></i>
                                <span class="icon-place"></span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="element-separator"><hr><h3 class="section-break-title">Baños</h3></div>
                <div class="element-select"><label class="title"></label>
                    <div class="item-cont"><div class="large">
                            <span>
                                <select name="banos" >
                                    <option value="">Seleccione uno</option>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                                <i></i>
                                <span class="icon-place">
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="element-separator"><hr><h3 class="section-break-title">Estado</h3></div>
            <div class="element-select"><label class="title"></label>
                <div class="item-cont"><div class="large">
                        <span>
                            <select name="estado" >
                                <option value="">Seleccione uno</option>
                                <option value="No especificado">No especificado</option>
                                <option value="Buen estado">Buen estado</option>
                                <option value="Excelente">Excelente</option>
                                <option value="Por remodelar">Por remodelar</option>
                            </select>
                            <i></i>
                            <span class="icon-place"></span>
                        </span>
                    </div>
                </div>
            </div>


            <div class="element-separator"><hr><h3 class="section-break-title">Especificacion</h3></div>
            <div class="element-textarea"><label class="title"></label>
                <div class="item-cont">
                    <textarea class="medium" name="especificacion" cols="20" maxlength="200" rows="5" placeholder="">
                    </textarea>
                    <span class="icon-place"></span>
                </div>
            </div>	

            <div class="element-separator"><hr><h3 class="section-break-title">Primer Imagen</h3></div>
            <div class="element-select"><label class="title"></label>
                <div class="item-cont"><input class="large" type="file"  name="imagen[]" placeholder="Selecciona Imagen" value=""/>
                    <span class="icon-place">
                    </span>
                </div>
            </div>

            <div class="element-separator"><hr><h3 class="section-break-title">Segunda Imagen</h3></div>
            <div class="element-select"><label class="title"></label>
                <div class="item-cont"><input class="large" type="file"  name="imagen[]" placeholder="Selecciona Imagen" value=""/>
                    <span class="icon-place">
                    </span>
                </div>
            </div>


            <div class="element-separator"><hr><h3 class="section-break-title">Tercer Imagen</h3></div>
            <div class="element-select"><label class="title"></label>
                <div class="item-cont"><input class="large" type="file"  name="imagen[]" placeholder="Selecciona Imagen" value=""/>
                    <span class="icon-place">
                    </span>
                </div>
            </div>

            <div class="submit"><input type="submit" value="Enviar" onclick="return validar_campos()"/></div>

        </form>

   

        <br>
        <br>
        <footer class="site-footer">
            <center><div><img src="../../frontend/imagenes/logooscuro2.png"  width="80" >  Inmobiliaria M&G Derechos Reservados &copy; 2016-2017<a href="CrearBus.jsp#" title="Subir" class="go-top"></a></div></center>
        </footer> 
        <script src="bootstrap-3.3.7-dist/jquery-3.1.1.js" type="text/javascript"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>
    </body>

    <script language="JavaScript">
                function validar_campos()
                {

                    if (document.formularioInmueble.select_id_ciudad.value == "") {
                        alert('Debe Elegir una Ciudad!');
                        document.formularioInmueble.select_id_ciudad.focus()
                        return false;
                    
                   
                    }
                    if (document.formularioInmueble.tipo_oferta.value.length == "") {
                        alert("Debe  elegir un tipo oferta")
                        document.formularioInmueble.tipo_oferta.focus()
                        return (false);
                    }
                    if (document.formularioInmueble.tipo_inmueble.value.length == 0) {
                        alert("Debe elegir un tipo inmueble")
                        document.formularioInmueble.tipo_inmueble.focus()
                        return (false);
                    }
                    if (document.formularioInmueble.barrio.value.length == 0) {
                        alert("Tiene que escribir el Barrio en que se encuentra el inmueble")
                        document.formularioInmueble.barrio.focus()
                        return (false);
                    }
                    if (document.formularioInmueble.direccion.value.length == 0) {
                        alert("Tiene que escribir la dirección en que se encuentra el inmueble")
                        document.formularioInmueble.direccion.focus()
                        return (false);
                    }
                    if (document.formularioInmueble.precio.value.length == 0) {
                        alert("Tiene que escribir el valor del inmueble")
                        document.formularioInmueble.precio.focus()
                        return (false);
                    }
                    if (document.formularioInmueble.estrato.value.length == 0) {
                        alert("Debe elegir un estrato para el inmueble.")
                        document.formularioInmueble.estrato.focus()
                        return (false);
                    }

                    if (document.formularioInmueble.area.value.length == 0) {
                        alert("Tiene que escribir la aréa del inmueble..")
                        document.formularioInmueble.area.focus()
                        return (false);
                    }

                    if (document.formularioInmueble.tipo_inmueble.value !== "Lote") {
                        if (document.formularioInmueble.habitaciones.value.length == 0) {
                            alert("Debe elegir el nº de habitaciones que tiene el inmueble.")
                            document.formularioInmueble.habitaciones.focus()
                            return (false);
                        }
                        if (document.formularioInmueble.banos.value.length == 0) {
                            alert("Debe elegir el nº de baños que tiene el inmueble.")
                            document.formularioInmueble.banos.focus()
                            return (false);
                        }

                    }
                    if (document.formularioInmueble.estado.value.length == 0) {
                        alert("Tiene que escribir el estado en que se encuentra el inmueble.")
                        document.formularioInmueble.estado.focus()
                        return (false);
                    }

                    re = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                    if (!re.test(formularioInmueble.barrio.value)) {
                        alert("Error: El barrio debe tener solo letras!");
                        document.formularioInmueble.barrio.focus()
                        return false;
                    }

                    if (!/^([0-9])*$/.test(document.formularioInmueble.area.value)) {

                        alert("El valor " + document.formularioInmueble.area.value + " no es un número");
                        document.formularioInmueble.area.focus()
                        return false;
                    }

                    else {


                        alert("Inmueble creado");
                        formularioInmueble.action = "insertar_inmueble.php";
                        formularioInmueble.submit();
                    }


                }

                function ocultar() {
                    if (document.formularioInmueble.tipo_inmueble.value == "Lote")

                    {

                        document.getElementById('ocultar').style.display = 'none';
                    }
                    else {


                        document.getElementById('ocultar').style.display = 'block';
                    }

                }
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
</html>
