<?php
include_once "../db/db.php";
$pagos = new db();
$pagos->conectar();

$sql = "SELECT * FROM pagos";
$datos = $pagos->obtenerRegistros($sql);

$sql = "SELECT * FROM ventas";
$venta = $pagos->obtenerRegistros($sql);

$pagos->desconectar();
?>

<?php include_once "../pagos/frm.php"; ?>

<hr>
<select id="buscar_columna">
    <option value="id">ID</option>
    <option value="venta_id">Id Venta</option>
    <option value="metodo_pago ">Metodo de Pago</option>                
</select>
<input type="text" id="buscar_valor" placeholder="Buscar...">
<button type="button" onclick="buscarPorColumna('pagos')">Buscar</button>
<div id="contenedor3">
    <?php include_once "../pagos/tabla.php"; ?>
</div>