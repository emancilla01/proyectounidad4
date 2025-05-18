<?php

  include_once "../db/db.php";
  $proveedores = new db();
  $proveedores->conectar();

  $id=$_REQUEST['id'];
  $tb=$_REQUEST['tb'];

  $sql = "DELETE FROM $tb WHERE id='$id'";
  $proveedores->eliminar($sql);

  $proveedores->desconectar();
?> 