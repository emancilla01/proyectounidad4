<?php

  include_once "../db/db.php";
  $categorias = new db();
  $categorias->conectar();
  $id=$_REQUEST['id'];
  $nombre=$_REQUEST['nombre'];
  if($id != ""){
    $sql = "UPDATE categorias SET nombre='$nombre' WHERE id='$id'";
    $categorias->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO categorias (nombre) values ('$nombre')";
  $categorias->insertar($sql);
  
  $categorias->desconectar();
?> 