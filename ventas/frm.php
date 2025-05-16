<article>
    <h2>Ventas</h2>
    <form action="/index.html" method="post" id="ventas" onsubmit="return false;">
        <label for="id">Id :</label>
        <input type="text" name="id" id="id">

        <label for="usuario_id">Id Usuario :</label>
        <input type="number" name="usuario_id" id="usuario_id">

        <label for="total">Total :</label>
        <input type="text" name="total" id="total">

        <label for="tipo_pago">Tipo de Pago :</label>
        <select name="tipo_pago" id="tipo_pago">
            <option value="1">Efectivo</option>
            <option value="2">Tarjeta</option>
            <option value="3">Transferencia</option>
        </select>

        <label for="estado">Estado :</label>
        <select name="estado" id="estado">
            <option value="1">Coahuila</option>
            <option value="2">Nuevo Leon</option>
            <option value="3">Baja California</option>
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
        <button onclick="enviardatos('compras', '/compras/ins_act.php', 'contenedor1')">Grabar</button>
        <button onclick="">Consultar</button>
    </form>

    <h2>Detalle de Compras</h2>
    <form action="/index.html" method="post" id="det_compras" onsubmit="return false;">
        
        <!-- <label for=""></label> -->
        <label for="id">Id:</label>
        <input type="number" name="id" id="id">

        <label for="idcompra">Id Compra :</label>
        <input type="number" name="idcompra" id="idcompra">

        <label for="idarticulo">Id Articulo :</label>
        <input type="number" name="idarticulo" id="idarticulo">

        <label for="cantidad">Cantidad :</label>
        <input type="number" name="cantidad" id="cantidad">

        <label for="preciounit">Precio Unitario :</label>
        <input type="number" step="0.01" name="preciounit" id="preciounit">

        <label for="subtotal">Subtotal :</label>
        <input type="number" step="0.01" name="subtotal" id="subtotal">    

        <button onclick="enviardatos('det_compras', '/compras/ins_act.php', 'contenedor1')">Grabar</button>
        <button onclick="">Consultar</button>               


    </form>


    
</article>
