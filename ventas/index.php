<?php
include_once "../db/db.php";

$dbventas = new db();
$dbventas->conectar();

$sql = "SELECT * FROM ventas";
$datos = $dbventas->obtenerRegistros($sql);

$sqlUsuarios = "SELECT * FROM usuarios";
$usuarios = $dbventas->obtenerRegistros($sqlUsuarios);
$dbventas->desconectar();

?>



<?php include_once "../ventas/frm.php"; ?>

<!-- <div id="contenedortabla" >

</div> -->

<div id="contenedor3">
    <?php include_once "../detalles_venta/index.php"; ?>
    <hr>
    <hr>
    <?php include_once "../ventas/tabla.php"; ?>
</div>