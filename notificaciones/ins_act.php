<?php
  include_once "../db/db.php";
  $notificaciones = new db();
  $notificaciones->conectar();

  $id=$_REQUEST['id'];
  $usuario_id=$_REQUEST['usuario_id'];
  $venta_id=$_REQUEST['venta_id'];
  $tipo=$_REQUEST['tipo'];
  $mensaje=$_REQUEST['mensaje'];
  $fecha_envio=$_REQUEST['fecha_envio'];
  $estado=$_REQUEST['estado'];  
  
  if($id != ""){
    $sql = "UPDATE notificaciones 
            SET usuario_id = '$usuario_id',
                venta_id = '$venta_id', 
                tipo = '$tipo',
                mensaje = '$mensaje',
                fecha_envio = '$fecha_envio',
                estado = '$estado'
            WHERE id = '$id'";
    $notificaciones->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO notificaciones (usuario_id, venta_id, tipo, mensaje, fecha_envio, estado) 
                VALUES ('$usuario_id', '$venta_id', '$tipo', '$mensaje', '$fecha_envio', '$estado')";
  $notificaciones->insertar($sql);
  
  $notificaciones->desconectar();
?> 