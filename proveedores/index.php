<?php
include_once "../db/db.php";

$proveedores = new db();
$proveedores->conectar();
$sql = "SELECT id, nombre, contacto, direccion  FROM proveedores";
$datos = $proveedores->obtenerRegistros($sql);
?>



<?php include_once "../proveedores/frm.php"; ?>

<!-- <div id="contenedortabla" >

</div> -->

<hr>
<?php include_once "../proveedores/tabla.php"; ?>