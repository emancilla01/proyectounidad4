<?php
include_once "../db/db.php";
$pagos = new db();
$pagos->conectar();

$sql = "SELECT id, venta_id,monto_pagado, metodo_pago, 
fecha_pago, saldo_restante, interes_generado FROM pagos";
$datos = $pagos->obtenerRegistros($sql);
?>

<?php include_once "../pagos/frm.php"; ?>

<!-- <div id="contenedor3" >

</div> -->

<hr>
<?php include_once "../pagos/tabla.php"; ?>