<?php
include_once "../db/db.php";

$proveedores = new db();
$proveedores->conectar();

$sql = "SELECT * FROM proveedores";
$datos = $proveedores->obtenerRegistros($sql);
?>

<?php include_once "../proveedores/frm.php"; ?>
<hr>
<div id="contenedor3">
    <?php include_once "../proveedores/tabla.php"; ?>
</div>
