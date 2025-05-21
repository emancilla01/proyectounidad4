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
<hr>
<select id="buscar_columna">
                <option value="id">ID</option>
                <option value="usuario_id">Id Usuario</option>                
                <option value="tipo">Tipo</option>
                <option value="estado">Estado</option>               
</select>
<input type="text" id="buscar_valor" placeholder="Buscar...">
<button type="button" onclick="buscarPorColumna('notificaciones')">Buscar</button>
<div id="contenedor3">
    <?php include_once "../notificaciones/tabla.php"; ?>
</div>
