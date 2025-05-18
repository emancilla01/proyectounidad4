<?php
include_once "../db/db.php";

$categorias = new db();
$categorias->conectar();
$sql = "SELECT id, nombre FROM categorias";
$datos = $categorias->obtenerRegistros($sql);
?>

<?php include_once "../categorias/frm.php"; ?>

<hr>
<div id="contenedor3">
<?php include_once "../categorias/tabla.php"; ?>
</div>