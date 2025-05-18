<article>

    <h2>Pagos</h2>
    <form action="/index.html" method="post" id="pagos" onsubmit="return false;"> 
        
        <label for="id">Id :</label>
        <input type="text" name="id" id="id">

        <label for="venta_id">Id Venta :</label>

        <select name="venta_id" id="venta_id">
            <?php foreach ($venta as $v) { 
                echo "<option value='" . $v["id"] . "'>" 
                                    . $v["id"] ."
                    </option>";
            } ?>
        </select>

        <label for="monto_pagado">Monto Pagado :</label>
        <input type="number" step="0.01" name="monto_pagado" id="monto_pagado">

        <label for="metodo_pago">Metodo de Pago :</label>
        <select name="metodo_pago" id="metodo_pago">
            <option value="efectivo">Efectivo</option>
            <option value="tarjeta">Tarjeta</option>
            <option value="transferencia">Transferencia</option>
        </select>

        <label for="fecha_pago">Fecha Pago:</label>
        <input type="datetime-local" name="fecha_pago" id="fecha_pago">

        <label for="saldo_restante">Saldo Restante :</label>
        <input type="number" step="0.01" name="saldo_restante" id="saldo_restante">

        <label for="interes_generado">Interes Generado :</label>
        <input type="number" step="0.01" name="interes_generado" id="interes_generado">
                
        <label for=""></label>
        <button onclick="enviardatos('pagos', '/pagos/ins_act.php', 'contenedor1')">Grabar</button>
        <button onclick="">Consultar</button>         

    </form>    
</article>
