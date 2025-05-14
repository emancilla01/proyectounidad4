<?php
include_once "../db/db.php";

$categorias = new db();
$categorias->conectar();
$sql = "SELECT id, nombre FROM categorias";
$datos = $categorias->obtenerRegistros($sql);
?>



<?php include_once "../categorias/frm.php"; ?>

<!-- <div id="contenedor3" >

</div> -->

<hr>
<?php include_once "../categorias/tabla.php"; ?>