<?php
  include_once "../db/db.php";
  $dbventas = new db();
  $dbventas->conectar();

  $id=$_REQUEST['id'];
  $tb=$_REQUEST['tb'];

  $sql = "DELETE FROM $tb WHERE id = $id";
  $dbventas->eliminar($sql);

  
  $sql = "SELECT * FROM $tb"; 
  $datos2 = $dbventas->obtenerRegistros($sql);
  include_once "../$tb/tabla.php";

  $dbventas->desconectar();
?>