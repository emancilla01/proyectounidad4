<?php

  include_once "../db/db.php";
  $notificaciones = new db();
  $notificaciones->conectar();

  $id=$_REQUEST['id'];
  $tb=$_REQUEST['tb'];
  
  $sql = "DELETE FROM $tb WHERE id='$id'";

  $notificaciones->eliminar($sql);

  $notificaciones->desconectar();
?> 