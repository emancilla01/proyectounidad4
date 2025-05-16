
<?php
// include_once "../db/db.php";
// $dbventas = new db();
// $dbventas->conectar();
$sql = "SELECT * FROM detalles_compra"; 
$datos_d = $dbventas->obtenerRegistros($sql);

$sql = "SELECT * FROM articulos"; 
$articulos= $dbventas->obtenerRegistros($sql);
?>
<div id="contenedor_detalle">
    <h2>Detalle de Compras</h2>
    <?php include_once "../detalles_compra/frm.php"; ?>   

</div>
