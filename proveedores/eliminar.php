<?php

  include_once "../db/db.php";
  $proveedores = new db();
  $proveedores->conectar();

  $id=$_REQUEST['id'];
  $sql = "DELETE FROM proveedores WHERE id='$id'";
  $proveedores->eliminar($sql);

  $proveedores->desconectar();
?> 