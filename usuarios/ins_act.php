<?php
  include_once "../db/db.php";
  $usuarios = new db();
  $usuarios->conectar();

  $id=$_REQUEST['id'];
  $nombre=$_REQUEST['nombre'];
  $email=$_REQUEST['email'];
  $contraseña=$_REQUEST['contraseña'];

  if($id != ""){
    $sql = "UPDATE usuarios 
            SET nombre = '$nombre', 
                email = '$email', 
                contraseña = '$contraseña'
            WHERE id = '$id'"; 
    $usuarios->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO usuarios (nombre, email, contraseña) 
                VALUES ('$nombre', '$email', '$contraseña')";
  $usuarios->insertar($sql);
  
  $usuarios->desconectar();
?> 