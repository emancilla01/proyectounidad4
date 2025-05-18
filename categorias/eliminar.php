<?php

  include_once "../db/db.php";
  $categorias = new db();
  $categorias->conectar();

  $id=$_REQUEST['id'];
  $tb=$_REQUEST['tb'];

  $sql = "DELETE FROM $tb WHERE id='$id'";
  $categorias->eliminar($sql);

  $categorias->desconectar();
?> 