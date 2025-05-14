<?php

  include_once "../db/db.php";
  $categorias = new db();
  $categorias->conectar();

  $id=$_REQUEST['id'];
  $sql = "DELETE FROM categorias WHERE id='$id'";
  $categorias->eliminar($sql);

  $categorias->desconectar();
?> 