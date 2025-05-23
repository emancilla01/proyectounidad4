<?php
include_once "../db/db.php";

$usuarios = new db();
$usuarios->conectar();

$sql = "SELECT * FROM usuarios";
$datos = $usuarios->obtenerRegistros($sql);
?>

<?php include_once "../usuarios/frm.php"; ?>

<hr>

<select id="buscar_columna">
    <option value="id">ID</option>
    <option value="nombre">Nombre</option>    
</select>
<input type="text" id="buscar_valor" placeholder="Buscar...">
<button type="button" onclick="buscarPorColumna('usuarios')">Buscar</button>

<div id="contenedor3">
    <?php include_once "../usuarios/tabla.php"; ?>
</div>