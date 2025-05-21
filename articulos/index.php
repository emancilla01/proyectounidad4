<?php
include_once "../db/db.php";

$articulos = new db();
$articulos->conectar();

// ...existing code... pending implementation for the search functionality
$where = "";
if (isset($_GET['buscar_id']) && $_GET['buscar_id'] != "") {
    $id = intval($_GET['buscar_id']);
    $where = " WHERE id = $id";
}
$sql = "SELECT * FROM articulos $where";
$datos = $articulos->obtenerRegistros($sql);
// ...existing code...

// $sql = "SELECT * FROM articulos";
// $datos = $articulos->obtenerRegistros($sql);
?>

<?php include_once "../articulos/frm.php"; ?>

<hr>

<select id="buscar_columna">
    <option value="id">ID</option>
    <option value="nombre">Nombre</option>
    <option value="descripcion">Descripción</option>
</select>
<input type="text" id="buscar_valor" placeholder="Buscar...">
<button type="button" onclick="buscarPorColumna('articulos')">Buscar</button>

<!-- original search bar -->
<!-- <input type="text" id="buscar_id" placeholder="Buscar por ID"
    value="<?php echo isset($_GET['buscar_id']) ? htmlspecialchars($_GET['buscar_id']) : ''; ?>">
<button type="button" onclick="buscarPorId()">Buscar</button> -->
<div id="contenedor3">
    <?php include_once "../articulos/tabla.php"; ?>
</div>
