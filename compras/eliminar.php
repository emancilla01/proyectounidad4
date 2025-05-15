<?php

  include_once "../db/db.php";
  $compras = new db();
  $compras->conectar();

  $id=$_REQUEST['id'];
  $sql = "DELETE FROM compras WHERE id='$id'";
  $compras->eliminar($sql);

  $compras->desconectar();
?> 