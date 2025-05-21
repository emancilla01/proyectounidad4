<?php
include_once "../db/db.php";

$proveedores = new db();
$proveedores->conectar();

$sql = "SELECT * FROM proveedores";
$datos = $proveedores->obtenerRegistros($sql);
?>

<?php include_once "../proveedores/frm.php"; ?>
<hr>

<select id="buscar_columna">
    <option value="id">ID</option>
    <option value="nombre">Nombre</option>    
</select>
<input type="text" id="buscar_valor" placeholder="Buscar...">
<button type="button" onclick="buscarPorColumna('proveedores')">Buscar</button>

<div id="contenedor3">
    <?php include_once "../proveedores/tabla.php"; ?>
</div>
