<?php

  include_once "../db/db.php";
  $articulos = new db();
  $articulos->conectar();

  $id=$_REQUEST['id'];
  $sql = "DELETE FROM articulos WHERE id='$id'";
  $articulos->eliminar($sql);

  $articulos->desconectar();
?> 