
<?php
header('Content-Type: application/vnd.ms-excel');

header('Expires: 0');

header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

header('content-disposition: attachment;filename=\'Reporte_Inmuebles_Facturados.xls\'');
?>
<table class="table table-hover"  style="text-align:left">

                <thead>
             <h3><CENTER>REPORTES IINMUEBLES DISPONIBLES M Y G</center></h3>
                <th>Nombre</th>
                <th >Apellido</th>
                <th >Cdad.</th>
                <th >Tp Oferta</th>
                <th >Tp Inmueble</th>
                <th >B.º</th>
                <th >Dir.</th>
                <th >Precio</th>
                <th >Estrato</th>
                <th >Aréa</th>
                <th >Habitaciones</th>
                <th >Baños</th>
                <th >Edo. Inmueble</th>
                <th >Especificacion</th>
            
                </thead>
                <?php
                include 'procesar_inmueble_FAC.php';
                $inmueblefac = new inmueblefac();

                $array = $inmueblefac->get_inmueblesFac();
                foreach ($array as $registro):
                    ?>

                    <tbody class="buscar">
                        <tr>
                         
                            <td><?php echo $registro->NOMBRE; ?></td>
                            <td><?php echo $registro->APELLIDO; ?></td>
                            <td><?php echo $registro->NOMBRE_CIUDAD; ?></td>
                            <td><?php echo $registro->tipo_oferta; ?></td>
                            <td><?php echo $registro->tipo_de_inmueble; ?></td>
                            <td><?php echo $registro->barrio; ?></td>
                            <td><?php echo $registro->direccion; ?></td>
                            <td><?php echo $registro->precio; ?></td>
                            <td><?php echo $registro->estrato; ?></td>
                            <td><?php echo $registro->area; ?></td>
                            <td><?php echo $registro->numero_de_habitaciones; ?></td>
                            <td><?php echo $registro->numero_de_banos; ?></td>
                            <td><?php echo $registro->estado_del_inmueble; ?></td>
                            <td><?php echo $registro->especificacion; ?></td>
        </tr>
    </tbody>
    <?php
endforeach;
?>
</table>

