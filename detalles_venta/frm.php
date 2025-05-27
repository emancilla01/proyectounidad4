<?php
if (!isset($datos_d) || !is_array($datos_d)) {
    $datos_d = [];
}
?>
<form action="" method="post" id="frm_detalle" onsubmit="return false;">
    <table>
        <tr>
            <td class="oculto" ><input type="hidden" name="id" id="id" value=""></td>
            <td class="oculto" ><input type="hidden" name="venta_id" id="venta_id" value="<?php echo isset($venta_id) ? $venta_id : ''; ?>"></td>
            
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
            <td><input type="number" name="subtotal" id="subtotal" style="width:70px" readonly></td>
            <td><button onclick="enviardatos_d('/detalles_venta/ins_act.php','frm_detalle','detalles_venta')">Grabar</button></td>
        </tr>
        <tr>
            <th class="oculto" ><label for="">id____:</label></th>
            <th class="oculto" ><label for="">Id Venta:</label></th>
            <th><label for="articulo_id">Articulo:</label></th>
            <th><label for="cantidad">Cantidad:</label></th>
            <th><label for="precio_unitario">Precio unitario:</label></th>
            <th><label for="subtotal">Subtotal:</label></th>
            <th></th>
        </tr>
        <?php foreach ($datos_d as $dato) {   ?>
        <tr>
            <td class="oculto" > <?php echo $dato['id']; ?> </td>
            <td class="oculto" > <?php echo $dato['venta_id']; ?></td>
            <td> <?php echo $dato['articulo_id']; ?></td>
            <td> <?php echo $dato['cantidad']; ?></td>
            <td> <?php echo $dato['precio_unitario']; ?></td>
            <td> <?php echo $dato['subtotal']; ?></td>
            <td><button onclick="editar('<?php echo $dato['id']; ?>','<?php echo 'detalles_venta'; ?>','frm_detalle')">Editar</button></td>
            <td><button onclick="eliminarDetalle('<?php echo $dato['id']; ?>','detalles_venta')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>
</form>