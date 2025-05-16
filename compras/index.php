<?php
include_once "../db/db.php";

$dbventas = new db();
$dbventas->conectar();

$sql = "SELECT *  FROM compras";
$datos = $dbventas->obtenerRegistros($sql);

// Consulta de proveedores
$proveedoresDb = new db();
$proveedoresDb->conectar();
$sqlProveedores = "SELECT * FROM proveedores";
$proveedores = $proveedoresDb->obtenerRegistros($sqlProveedores);
?>


<div>
    <h3>Compras</h3>
    <?php include_once "../compras/frm.php"; ?>
    
    <!-- <div>
         
    </div> -->
    
    <div id="contenedor3">
            <?php include_once "../detalles_compra/index.php"; ?>
            <hr>
            <hr>
            <?php include_once "../compras/tabla.php"; ?>
    </div>
</div>