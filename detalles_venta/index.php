
<?php
// include_once "../db/db.php";
// $dbventas = new db();
// $dbventas->conectar();
$sql = "SELECT * FROM detalles_venta"; 
$datos_d = $dbventas->obtenerRegistros($sql);

//17 may
$sql = "SELECT * FROM ventas";
$datos_v = $dbventas->obtenerRegistros($sql);
// 17 may

$sql = "SELECT * FROM articulos"; 
$articulos= $dbventas->obtenerRegistros($sql);
?>
<div id="contenedor_detalle">
    <h2>Detalle de Ventas</h2>
    <?php include_once "../detalles_venta/frm.php"; ?>   
</div>