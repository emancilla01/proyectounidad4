<?php

  include_once "../db/db.php";
  $pagos = new db();
  $pagos->conectar();

  $id=$_REQUEST['id'];
  
  $sql = "DELETE FROM pagos WHERE id='$id'";

  $pagos->eliminar($sql);

  $pagos->desconectar();
?> 