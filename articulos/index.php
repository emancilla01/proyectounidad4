<?php
include_once "../db/db.php";

$articulos = new db();
$articulos->conectar();

// ...existing code... pending implementation for the search functionality
// $where = "";
// if (isset($_GET['buscar_id']) && $_GET['buscar_id'] != "") {
//     $id = intval($_GET['buscar_id']);
//     $where = " WHERE id = $id";
// }
// $sql = "SELECT * FROM articulos $where";
// $datos = $db->obtenerRegistros($sql);
// ...existing code...

$sql = "SELECT * FROM articulos";
$datos = $articulos->obtenerRegistros($sql);
?>

<?php include_once "../articulos/frm.php"; ?>

<hr>
<div id="contenedor3">
    <?php include_once "../articulos/tabla.php"; ?>
</div>
