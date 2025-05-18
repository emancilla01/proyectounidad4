<?php
include_once "../db/db.php";

$usuarios = new db();
$usuarios->conectar();

$sql = "SELECT * FROM usuarios";
$datos = $usuarios->obtenerRegistros($sql);
?>



<?php include_once "../usuarios/frm.php"; ?>

<hr>
<div id="contenedor3">
    <?php include_once "../usuarios/tabla.php"; ?>
</div>