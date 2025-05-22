<?php
include_once "../db/db.php";

$dbventas = new db();
$dbventas->conectar();

$sql = "SELECT * FROM ventas";
$datos = $dbventas->obtenerRegistros($sql);

$sqlUsuarios = "SELECT * FROM usuarios";
$usuarios = $dbventas->obtenerRegistros($sqlUsuarios);
$dbventas->desconectar();

?>


<div>
<?php include_once "../ventas/frm.php"; ?>

<div id="contenedorDetalles"></div>

<!-- <?php include_once "../detalles_venta/index.php"; ?> -->
<hr>
<hr>
<select id="buscar_columna">
                <option value="id">ID</option>
                <option value="usuario_id">Id Usuario</option>
                <option value="tipo_pago">Tipo de Pago</option>
                <option value="estado">Estado</option>
                <option value="fecha_limite_pago">Fecha Limite Pago</option>
    </select>
    <input type="text" id="buscar_valor" placeholder="Buscar...">
    <button type="button" onclick="buscarPorColumna('ventas')">Buscar</button>
<div id="contenedor3">    
    <?php include_once "../ventas/tabla.php"; ?>
</div>
</div>