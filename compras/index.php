<?php
include_once "../db/db.php";

$compras = new db();
$compras->conectar();
$sql = "SELECT id, proveedor_id, total, fecha  FROM compras";
$datos = $compras->obtenerRegistros($sql);

// Consulta de proveedores
$proveedoresDb = new db();
$proveedoresDb->conectar();
$sqlProveedores = "SELECT id, nombre FROM proveedores";
$proveedores = $proveedoresDb->obtenerRegistros($sqlProveedores);
?>




<?php include_once "../compras/frm.php"; ?>

<!-- <div id="contenedortabla" >

</div> -->

<hr>
<?php include_once "../compras/tabla.php"; ?>