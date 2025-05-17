<article>
    <h2>Ventas</h2>
    <form action="/index.html" method="post" id="ventas" onsubmit="return false;">
        <label for="id">Id :</label>
        <input type="text" name="id" id="id">

        <!-- <label for="usuario_id">Id Usuario :</label>
        <input type="text" name="usuario_id" id="usuario_id"> -->

        <label for="usuario_id">Id Usuario :</label>
        <select name="usuario_id" id="usuario_id">
            <?php foreach ($usuarios as $usuario) { 
                echo "<option value='" . $usuario["id"] . "'>" 
                                    . $usuario["nombre"] ."
                    </option>";
            } ?>
        </select>

        <label for="total">Total :</label>
        <input type="text" name="total" id="total">

        <label for="tipo_pago">Tipo de Pago :</label>
        <select name="tipo_pago" id="tipo_pago">
            <option value="1">Contado</option>
            <option value="2">Credito</option>
        </select>

        <label for="estado">Estado :</label>
        <select name="estado" id="estado">
            <option value="1">Pendiente</option>
            <option value="2">Pagado</option>
            <option value="3">Cancelado</option>
        </select>
        
        <label for="saldo_pendiente">Saldo Pendiente :</label>
        <input type="text" name="saldo_pendiente" id="saldo_pendiente">

        <label for="fecha">Fecha :</label>
        <input type="datetime-local" name="fecha" id="fecha">

        <label for="fecha_limite_pago">Fecha Limite Pago :</label>
        <input type="date" name="fecha_limite_pago" id="fecha_limite_pago">

        <label for="tasa_interes">Tasa Interes :</label>
        <input type="number" step="0.01" name="tasa_interes" id="tasa_interes">
         
        <label></label>
        <button onclick="enviardatos('ventas', '/ventas/ins_act.php', 'contenedor1')">Grabar</button>
        <button onclick="">Consultar</button>
    </form>
        
</article>
