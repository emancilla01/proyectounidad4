<?php
include_once "../db/db.php";

$articulos = new db();
$articulos->conectar();
$sql = "SELECT * FROM articulos";
$datos = $articulos->obtenerRegistros($sql);
?>

<?php include_once "../articulos/frm.php"; ?>

<hr>
<div id="contenedor3">
    <?php include_once "../articulos/tabla.php"; ?>
</div>
