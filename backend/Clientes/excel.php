
<?php
header('Content-Type: application/vnd.ms-excel');

header('Expires: 0');

header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

header('content-disposition: attachment;filename=\'Reporte_Clientes.xls\'');
?>
<table class="table table-hover"  style="text-align:left">
 <thead>
<h3><CENTER>REPORTES CLIENTES M Y G</center></h3>

            <th >Nombre</th>
            <th >Apellido</th>
            <th >Dirección</th>
            <th >Documento</th>
            <th >Telefono</th>      
       
      
            </thead>
            <?php
            include 'DaoCliente.php';
            $persona = new personas();

            $array = $persona->get_personas();
            foreach ($array as $registro):
                ?>
                <tbody class="buscar">
                    <tr>

                        <td><?php echo $registro->nombre; ?></td>
                        <td><?php echo $registro->apellido; ?></td>
                        <td><?php echo $registro->direccion_persona; ?></td>
                        <td><?php echo $registro->documento; ?></td>
                        <td><?php echo $registro->telefono; ?></td>
      
        </tr>
    </tbody>
    <?php
endforeach;
?>
</table>

