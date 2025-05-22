<?php
include_once "../db/db.php";

$dbventas = new db();
$dbventas->conectar();

$sql = "SELECT *  FROM compras";
$datos2 = $dbventas->obtenerRegistros($sql);

// Consulta de proveedores
// $proveedoresDb = new db();
// $proveedoresDb->conectar();
$sqlProveedores = "SELECT * FROM proveedores";
$proveedores = $dbventas->obtenerRegistros($sqlProveedores);
$dbventas->desconectar();
?>


<div>
    <!-- <h3>Compras</h3> -->
    <?php include_once "../compras/frm.php"; ?>
    
    <div id="contenedorDetalles"></div>
    <!-- <?php include_once "../detalles_compra/index.php"; ?> -->
    <hr>        
    <hr>
    <select id="buscar_columna">
                <option value="id">ID</option>
                <option value="proveedor_id">Id Proveedor</option>    
    </select>
    <input type="text" id="buscar_valor" placeholder="Buscar...">
    <button type="button" onclick="buscarPorColumna('compras')">Buscar</button>
    
    <div id="contenedor3">        
        <?php include_once "../compras/tabla.php"; ?>
    </div>
</div>
