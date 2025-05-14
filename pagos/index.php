<?php
include_once "../db/db.php";

$pagos = new db();
$pagos->conectar();
$sql = "SELECT id, nombre, idventa,montopagado, metodopago, 
fecha pago, saldorest, interesgenerado FROM pagos";
$datos = $pagos->obtenerRegistros($sql);
?>

<?php include_once "../pagos/frm.php"; ?>

<!-- <div id="contenedor3" >

</div> -->

<hr>
<?php include_once "../pagos/tabla.php"; ?>