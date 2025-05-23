<?php
  include_once "../db/db.php";
  $articulos = new db();
  $articulos->conectar();

  $id=$_REQUEST['id'];
  $tb=$_REQUEST['tb'];

  $sql = "DELETE FROM $tb WHERE id='$id'";
  $articulos->eliminar($sql);

  $articulos->desconectar();
?> 