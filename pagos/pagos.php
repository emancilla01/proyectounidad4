<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_REQUEST['id'];    
    $idventa = isset($_REQUEST['idventa']) ? $_REQUEST['idventa'] : null;
    $montopagado = isset($_REQUEST['montopagado']) ? $_REQUEST['montopagado'] : null;
    $metodopago = isset($_REQUEST['metodopago']) ? $_REQUEST['metodopago'] : null;
    $fechapago = isset($_REQUEST['fechapago']) ? $_REQUEST['fechapago'] : null;
    $saldorest = isset($_REQUEST['saldorest']) ? $_REQUEST['saldorest'] : null;
    $interesgenerado = isset($_REQUEST['interesgenerado']) ? $_REQUEST['interesgenerado'] : null;           
    $accion = $_REQUEST['accion'];    

    if ($accion === "consultar") {
        $sql = "SELECT * FROM pagos;";   
    } elseif ($accion === "insertar") {
        $sql = "INSERT INTO pagos ('id', 'idventa','montopagado', 'metodopago', 'fechapago', 'saldorest', 'interesgenerado') 
                VALUES ('$id', '$montopagado', '$metodopago', '$fechapago', '$saldorest', '$interesgenerado')";
    } elseif ($accion === "editar") {
        $sql = "SELECT * FROM pagos WHERE id = '$id'";
    } elseif ($accion === "actualizar") {
        $sql = "UPDATE pagos SET idventa = '$idventa', montopagado = '$montopagado', 
        metodopago = '$metodopago', fechapago = '$fechapago', saldorest = '$saldorest',
        interesgenerado = '$interesgenerado'
        WHERE id = '$id'";
    } elseif ($accion === "eliminar") {
        $sql = "DELETE FROM pagos WHERE id = '$id'";
    }
    else {
        $sql = "Acción no válida.";
    }

    echo $sql;
    exit; // evita que también se muestre el HTML
}
?>
<article>
    <h2>Pagos</h2>
    <form action="/index.html" method="post" id="pagos" onsubmit="return false;">
    
    
    <label for="id">Id :</label>
    <input type="number" name="id" id="id">

    <label for="idventa">Id Venta :</label>
    <input type="number" name="idventa" id="idventa">

    <label for="montopagado">Monto Pagado :</label>
    <input type="number" step="0.01" name="montopagado" id="montopagado">

    <label for="metodopago">Metodo de Pago :</label>
    <select name="metodopago" id="metodopago">
        <option value="1">Efectivo</option>
        <option value="2">Tarjeta</option>
        <option value="3">Transferencia</option>
    </select>

    <label for="fechapago">Fecha Pago:</label>
    <input type="datetime-local" name="fechapago" id="fechapago">

    <label for="saldorest">Saldo Restante :</label>
    <input type="number" step="0.01" name="saldorest" id="saldorest">

    <label for="interesgenerado">Interes Generado :</label>
    <input type="number" step="0.01" name="interesgenerado" id="interesgenerado">


    <!-- <label></label>
    <button type="button" onclick="enviar()">Enviar</button> -->

    

</form>
</article>
