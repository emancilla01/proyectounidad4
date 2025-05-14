<?php

  include_once "../db/db.php";
  $usuarios = new db();
  $usuarios->conectar();

  $id=$_REQUEST['id'];
  $sql = "DELETE FROM usuarios WHERE id='$id'";
  $usuarios->eliminar($sql);

  $usuarios->desconectar();
?> 