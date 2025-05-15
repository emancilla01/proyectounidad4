<?php
include_once "../db/db.php";
$categorias = new db();
$categorias->conectar();
$sql = "SELECT id, nombre FROM categorias"; 
$datos = $categorias->obtenerRegistros($sql);
$categorias->desconectar();
echo json_encode($datos);
?>
