<?php
include_once "../db/db.php";

$usuarios = new db();
$usuarios->conectar();
$sql = "SELECT id, nombre, email, contraseña  FROM usuarios";
$datos = $usuarios->obtenerRegistros($sql);
?>



<?php include_once "../usuarios/frm.php"; ?>

<!-- <div id="contenedortabla" >

</div> -->

<hr>
<?php include_once "../usuarios/tabla.php"; ?>