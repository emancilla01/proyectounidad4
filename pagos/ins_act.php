<?php
  include_once "../db/db.php";
  $pagos = new db();
  $pagos->conectar();

  $id=$_REQUEST['id'];
  $venta_id=$_REQUEST['venta_id'];
  $monto_pagado=$_REQUEST['monto_pagado'];
  $metodo_pago=$_REQUEST['metodo_pago'];
  $fecha_pago=$_REQUEST['fecha_pago'];
  $saldo_restante=$_REQUEST['saldo_restante'];
  $interes_generado=$_REQUEST['interes_generado'];
  
  if($id != ""){
    $sql = "UPDATE pagos 
            SET venta_id = '$venta_id', 
                monto_pagado = '$monto_pagado', 
                metodo_pago = '$metodo_pago', 
                fecha_pago = '$fecha_pago', 
                saldo_restante = '$saldo_restante',
                interes_generado = '$interes_generado'
            WHERE id = '$id'";
    $pagos->actualizar($sql);
    echo "Registro actualizado correctamente";
    exit();
  }
  $sql = "INSERT INTO pagos (venta_id, monto_pagado, metodo_pago, fecha_pago, saldo_restante, interes_generado) 
                VALUES ('$venta_id', '$monto_pagado', '$metodo_pago', '$fecha_pago', '$saldo_restante', '$interes_generado')";
  $pagos->insertar($sql);
  
  $pagos->desconectar();
?> 