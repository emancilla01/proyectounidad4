
<article>

    <h2>Pagos</h2>
    <form action="/index.html" method="post" id="frm" onsubmit="return false;"> 
        
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
                
        
        <button onclick="enviardatos('frm', '/categorias/ins_act.php', 'contenedor1')">Grabar</button>
        <button onclick="">Consultar</button> 
        

    </form>    
</article>
