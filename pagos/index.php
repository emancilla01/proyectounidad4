<?php
include_once "../db/db.php";
$pagos = new db();
$pagos->conectar();

$sql = "SELECT * FROM pagos";
$datos = $pagos->obtenerRegistros($sql);

$sql = "SELECT * FROM ventas";
$venta = $pagos->obtenerRegistros($sql);

$pagos->desconectar();
?>

<?php include_once "../pagos/frm.php"; ?>

<!-- <div id="contenedor3" >

</div> -->

<hr>
<div id="contenedor3">
    <?php include_once "../pagos/tabla.php"; ?>
</div>
