<?php
  include_once "../db/db.php";
  $ventas = new db();
  $ventas->conectar();

  $id=$_REQUEST['id'];
  $usuario_id = $_REQUEST['usuario_id'];
  $total = $_REQUEST['total'];
  $tipo_pago = $_REQUEST['tipo_pago'];
  $estado = $_REQUEST['estado'];
  $saldo_pendiente = $_REQUEST['saldo_pendiente'];
  $fecha = $_REQUEST['fecha'];
  $fecha_limite_pago = $_REQUEST['fecha_limite_pago'];
  $tasa_interes = $_REQUEST['tasa_interes'];
  
  if($id != ""){
    $sql = "UPDATE ventas 
            SET usuario_id = '$usuario_id', 
                total = '$total', 
                tipo_pago = '$tipo_pago', 
                estado = '$estado',
                saldo_pendiente = '$saldo_pendiente', 
                fecha = '$fecha', 
                fecha_limite_pago = '$fecha_limite_pago', 
                tasa_interes = '$tasa_interes'
            WHERE id = '$id'"; 
    $ventas->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO ventas (usuario_id, total, tipo_pago, estado, saldo_pendiente, fecha, fecha_limite_pago, tasa_interes) 
                VALUES ('$usuario_id', '$total', '$tipo_pago', '$estado', '$saldo_pendiente', '$fecha', '$fecha_limite_pago', '$tasa_interes')";
  $ventas->insertar($sql);
  
  $ventas->desconectar();
?> 