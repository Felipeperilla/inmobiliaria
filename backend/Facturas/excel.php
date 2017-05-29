
<?php
header('Content-Type: application/vnd.ms-excel');

header('Expires: 0');

header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

header('content-disposition: attachment;filename=\'Reporte_Facturas.xls\'');
?>
<table class="table table-hover"  style="text-align:left">
<thead>
<h3><CENTER>REPORTES FACTURAS M Y G</center></h3>
<th>Nombre  Cliente</th>
<th>Nombre Comprador</th>
<th>Valor</th>
<th>Observacion</th>
<th>Fecha</th>
</thead>
<?php
include 'DaoFactura.php';
$factura = new factura();
$array = $factura->get_facturas();
foreach ($array as $registro):
    ?>
    <tbody class="buscar">
        <tr>
            <td><?php echo $registro->NOMBRE; ?> <?php echo $registro->APELLIDO; ?></td>
            <td><?php echo $registro->NOMBRE_PERSONA; ?></td>
            <td><?php echo $registro->VALOR; ?></td>
            <td><?php echo $registro->OBSERVACION; ?></td>
            <td><?php echo $registro->FECHA; ?></td>
      
        </tr>
    </tbody>
    <?php
endforeach;
?>
</table>

