<?php
  include_once "../db/db.php";
  $proveedores = new db();
  $proveedores->conectar();

  $id=$_REQUEST['id'];
  $nombre=$_REQUEST['nombre'];
  $contacto=$_REQUEST['contacto'];
  $direccion=$_REQUEST['direccion'];
  
  if($id != ""){
    $sql = "UPDATE proveedores 
            SET nombre = '$nombre', 
            contacto = '$contacto', 
            direccion = '$direccion'
            WHERE id = '$id'"; 
    $proveedores->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO proveedores (nombre, contacto, direccion) 
          VALUES ('$nombre', '$contacto', '$direccion')";
  $proveedores->insertar($sql);
  
  $proveedores->desconectar();
?> 