<?php
include_once "../db/db.php";
$dbventas = new db();
$dbventas->conectar();

$venta_id = isset($_GET['venta_id']) ? intval($_GET['venta_id']) : 0;

$sql = "SELECT * FROM detalles_venta WHERE venta_id = $venta_id"; 
$datos_d = $dbventas->obtenerRegistros($sql);

$sql = "SELECT * FROM ventas";
$datos_v = $dbventas->obtenerRegistros($sql);

$sql = "SELECT * FROM articulos"; 
$articulos= $dbventas->obtenerRegistros($sql);
$dbventas->desconectar();
?>
<div id="contenedor_detalle">
    <h2>Detalle de Ventas</h2>
    <?php include_once "../detalles_venta/frm.php"; ?>   
</div>