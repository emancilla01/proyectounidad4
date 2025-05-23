<?php
include_once "../db/db.php";
$dbventas = new db();
$dbventas->conectar();

$id_compra = isset($_GET['id_compra']) ? intval($_GET['id_compra']) : 0;

$sql = "SELECT * FROM detalles_compra WHERE compra_id = $id_compra"; 
$datos_d = $dbventas->obtenerRegistros($sql);

$sql = "SELECT * FROM articulos"; 
$articulos= $dbventas->obtenerRegistros($sql);
$dbventas->desconectar();
?>
<div id="contenedor_detalle">
    <h2>Detalle de Compras</h2>
    <?php include_once "../detalles_compra/frm.php"; ?>   
</div>
