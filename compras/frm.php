<article>
    <h2>Compras</h2>
    <form action="/index.html" method="post" id="compras" onsubmit="return false;">
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" value="" readonly>

        <label for="proveedor_id">Id Proveedor :</label>
        <select name="proveedor_id" id="proveedor_id">
            <?php foreach ($proveedores as $proveedor) { 
                echo "<option value='" . $proveedor["id"] . "'>" 
                                    . $proveedor["nombre"] ."
                    </option>";
            } ?>
        </select>

        <label for="total">Total :</label>
        <input type="text" name="total" id="total">

        <label for="fecha">fecha :</label>
        <input type="datetime-local" name="fecha" id="fecha">
    
        <label></label>
        <button onclick="enviardatos('compras', '/compras/ins_act.php', 'contenedor1')">Grabar</button>
    </form>
</article>
