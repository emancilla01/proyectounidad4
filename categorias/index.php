<?php
include_once "../db/db.php";

$categorias = new db();
$categorias->conectar();

$sql = "SELECT id, nombre FROM categorias";
$datos = $categorias->obtenerRegistros($sql);
?>

<?php include_once "../categorias/frm.php"; ?>

<hr>

<select id="buscar_columna">
    <option value="id">ID</option>
    <option value="nombre">Nombre</option>    
</select>
<input type="text" id="buscar_valor" placeholder="Buscar...">
<button type="button" onclick="buscarPorColumna('categorias')">Buscar</button>

<div id="contenedor3">
<?php include_once "../categorias/tabla.php"; ?>
</div>