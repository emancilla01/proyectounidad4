<?php

  include_once "../db/db.php";
  $pagos = new db();
  $pagos->conectar();

  $id=$_REQUEST['id'];
  $tb=$_REQUEST['tb'];
  
  $sql = "DELETE FROM $tb WHERE id='$id'";

  $pagos->eliminar($sql);

  $pagos->desconectar();
?> 