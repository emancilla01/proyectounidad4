<?php
include_once "../db/db.php";
$dbventas = new db();
$dbventas->conectar();

$compra_id = isset($_GET['compra_id']) ? intval($_GET['compra_id']) : 0;

$sql = "SELECT * FROM detalles_compra WHERE compra_id = $compra_id"; 
$datos_d = $dbventas->obtenerRegistros($sql);

$sql = "SELECT * FROM articulos"; 
$articulos= $dbventas->obtenerRegistros($sql);
$dbventas->desconectar();
?>
<div id="contenedor_detalle">
    <h2>Detalle de Compras</h2>
    <?php include_once "../detalles_compra/frm.php"; ?>   
</div>
