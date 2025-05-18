<?php
include_once "../db/db.php";
$notificaciones = new db();
$notificaciones->conectar();

$sql = "SELECT * FROM notificaciones";
$datos = $notificaciones->obtenerRegistros($sql);

$sql = "SELECT * FROM ventas";
$ventas = $notificaciones->obtenerRegistros($sql);

$sqlUsuarios = "SELECT * FROM usuarios";
$usuarios = $notificaciones->obtenerRegistros($sqlUsuarios);

$notificaciones->desconectar();
?>

<?php include_once "../notificaciones/frm.php"; ?>

<!-- <div id="contenedor3" >

</div> -->

<hr>
<div id="contenedor3">
    <?php include_once "../notificaciones/tabla.php"; ?>
</div>
