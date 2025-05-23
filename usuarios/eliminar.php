<?php
  include_once "../db/db.php";
  $usuarios = new db();
  $usuarios->conectar();

  $id=$_REQUEST['id'];
  $tb=$_REQUEST['tb'];

  $sql = "DELETE FROM $tb WHERE id='$id'";
  
  $usuarios->eliminar($sql);

  $usuarios->desconectar();
?> 