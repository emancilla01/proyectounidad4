<?php
  include_once "../db/db.php";
  $compras = new db();
  $compras->conectar();

  $id=$_REQUEST['id'];
  $proveedor_id = $_REQUEST['proveedor_id'];
  $total = $_REQUEST['total'];
  $fecha = $_REQUEST['fecha'];
  
  if($id != ""){
    $sql = "UPDATE compras 
            SET proveedor_id = '$proveedor_id',
                total = '$total', 
                fecha = '$fecha'
            WHERE id = '$id'"; 
    $compras->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO compras (proveedor_id, total, fecha) 
                VALUES ('$proveedor_id', '$total', '$fecha')";
  $compras->insertar($sql);
  
  $compras->desconectar();
?> 