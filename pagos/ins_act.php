<?php

  include_once "../db/db.php";
  $pagos = new db();
  $pagos->conectar();
  $id=$_REQUEST['id'];
  $idventa=$_REQUEST['idventa'];
  $montopagado=$_REQUEST['montopagado'];
  $metodopago=$_REQUEST['metodopago'];
  $fechapago=$_REQUEST['fechapago'];
  $saldorest=$_REQUEST['saldorest'];
  $interesgenerado=$_REQUEST['interesgenerado'];
  if($id != ""){
    $sql = "UPDATE pagos SET venta_id = '$idventa', montopagado = '$montopagado', 
        metodopago = '$metodopago', fechapago = '$fechapago', saldorest = '$saldorest',
        interesgenerado = '$interesgenerado'
        WHERE id = '$id'";
    $pagos->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO pagos (venta_id, monto_pagado, metodo_pago, fecha_pago, saldo_restante, interes_generado) 
                VALUES ('$idventa', '$montopagado', '$metodopago', '$fechapago', '$saldorest', '$interesgenerado')";
  $pagos->insertar($sql);
  
  $pagos->desconectar();
?> 