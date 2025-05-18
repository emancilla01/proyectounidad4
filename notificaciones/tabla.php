
    <table>
        <tr>
            <th>ID</th>
            <th>Id Usuario</th>            
            <th>ID Venta</th>
            <th>Tipo</th>
            <th>Mensaje</th>
            <th>Fecha Envio</th>
            <th>Estado</th>            
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['usuario_id'];?></td>
            <td><?php echo $dato['venta_id'];?></td>
            <td><?php echo $dato['tipo'];?></td>
            <td><?php echo $dato['mensaje'];?></td>
            <td><?php echo $dato['fecha_envio'];?></td>
            <td><?php echo $dato['estado'];?></td>

            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'notificaciones'; ?>')">Editar</button></td>
            <td><button onclick="eliminar2('<?php echo $dato['id']; ?>','<?php echo 'notificaciones'; ?>')">Eliminar</button></td>

            <!-- <td><button onclick="editar(<?php echo addslashes ($dato['id']);?>,'<?php echo addslashes ($dato['idventa']);?>', 
            '<?php echo addslashes ($dato['montopagado']);?>', '<?php echo addslashes ($dato['metodopago']);?>', '<?php echo addslashes ($dato['fechapago']);?>', 
            '<?php echo addslashes ($dato['saldorest']);?>', '<?php echo addslashes ($dato['interesgenerado']);?>' )" >Editar</button></td>
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/pagos/eliminar.php', 'contenedor1')" >Eliminar</button></td> -->
        </tr>
        <?php } ?>
    </table>