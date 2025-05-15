
<?php
// include_once "../db/db.php";
// $dbventas = new db();
// $dbventas->conectar();
$sql = "SELECT * FROM detalles_compra"; 
$datos_d = $dbventas->obtenerRegistros($sql);

$sql = "SELECT * FROM articulos"; 
$articulos= $dbventas->obtenerRegistros($sql);
?>
<section id="contenedor_detalle">
    <?php include_once "../detalles_compra/frm.php"; ?>
    <hr>

</section>
