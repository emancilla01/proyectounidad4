<form action="" method="post" id="frm_detalle" onsubmit="return false;">
    <table>
        <tr>
            <td><input type="text" name="id" id="id" value=""></td>

            <td> 
                <select name="venta_id" id="venta_id">
                    <option value="0" >Seleccionar Id de Venta</option>
                    <?php foreach ($datos_v as $dato_v) { 
                        echo "<option value='" . $dato_v["id"] . "'>" 
                                   . $dato_v["id"] ."
                            </option>";
                    } ?>
                </select>
            </td>
            <td> 
                <select name="articulo_id" id="articulo_id">
                    <option value="0" >Seleccionar Articulo</option>
                    <?php foreach ($articulos as $articulo) { 
                        echo "<option value='" . $articulo["id"] . "'>" 
                                   . $articulo["nombre"] ."
                            </option>";
                    } ?>
                </select>
            </td>
            <td> <input type="number" name="cantidad" id="cantidad" > </td>
            <td><input type="number" name="precio_unitario" id="precio_unitario"> </td>
            <td><input type="number" name="subtotal" id="subtotal" style="width:70px"></td>
            <td><button onclick="enviardatos_d('/detalles_compra/ins_act.php')">Grabar</button></td>
        </tr>
        <tr>
            <th><label for="">id____:</label></th>
            <th><label for="">Id Venta:</label></th>
            <th><label for="articulo_id">Articulo:</label></th>
            <th><label for="cantidad">Cantidad:</label></th>
            <th><label for="precio_unitario">Precio unitario:</label></th>
            <th><label for="subtotal">Subtotal:</label></th>
            <th></th>
        </tr>
        <?php foreach ($datos_d as $dato) {   ?>
        <tr>
            <td> <?php echo $dato['id']; ?> </td>
            <td> <?php echo $dato['venta_id']; ?></td>
            <td> <?php echo $dato['articulo_id']; ?></td>
            <td> <?php echo $dato['cantidad']; ?></td>
            <td> <?php echo $dato['precio_unitario']; ?></td>
            <td> <?php echo $dato['subtotal']; ?></td>
            <td><button onclick="editar('<?php echo $dato['id']; ?>','<?php echo 'detalles_venta'; ?>')">Editar</button></td>
            <td><button onclick="eliminar('<?php echo $dato['id']; ?>','<?php echo 'detalles_venta'; ?>')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>
</form>