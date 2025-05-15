
    <table>
        <tr>
            <th>ID</th>
            <th>ID Venta</th>
            <th>Monto Pagado</th>
            <th>Metodo de Pago</th>
            <th>Fecha Pago</th>
            <th>Saldo Restante</th>
            <th>Interes Generado</th>
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['idventa'];?></td>
            <td><?php echo $dato['montopagado'];?></td>
            <td><?php echo $dato['metodopago'];?></td>
            <td><?php echo $dato['fechapago'];?></td>
            <td><?php echo $dato['saldorest'];?></td>
            <td><?php echo $dato['interesgenerado'];?></td>
            <td><button onclick="editar(<?php echo addslashes ($dato['id']);?>,'<?php echo addslashes ($dato['idventa']);?>', 
            '<?php echo addslashes ($dato['montopagado']);?>', '<?php echo addslashes ($dato['metodopago']);?>', '<?php echo addslashes ($dato['fechapago']);?>', 
            '<?php echo addslashes ($dato['saldorest']);?>', '<?php echo addslashes ($dato['interesgenerado']);?>' )" >Editar</button></td>
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/pagos/eliminar.php', 'contenedor1')" >Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>