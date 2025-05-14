<?php


  include_once "../db/db.php";
  $articulos = new db();
  $articulos->conectar();
  $id=$_REQUEST['id'];
  $nombre=$_REQUEST['nombre'];
  $descripcion=$_REQUEST['descripcion'];
  $precio=$_REQUEST['precio'];
  $stock=$_REQUEST['stock'];
  if($id != ""){
    $sql = "UPDATE articulos SET nombre='$nombre', descripcion = '$descripcion', precio = '$precio',
        stock = '$stock' WHERE id = '$id'"; 
    $articulos->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO articulos (nombre, descripcion, precio, stock) 
                VALUES ('$nombre', '$descripcion', '$precio', '$stock')";
  $articulos->insertar($sql);
  
  $articulos->desconectar();
?> 