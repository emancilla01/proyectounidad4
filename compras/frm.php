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
        <button onclick="">Consultar</button>
    </form>

    <!-- <h2>Detalle de Compras</h2> -->
    
    <!-- <form action="/index.html" method="post" id="det_compras" onsubmit="return false;">
        
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
    </form> -->

    
</article>
