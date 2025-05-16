
    <table>
        <tr>
            <th>Id</th>
            <th>Id Proveedor</th>
            <th>Total</th>
            <th>Fecha</th>
        </tr>
        <?php
            foreach ($datos2 as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['proveedor_id'];?></td>
            <td><?php echo $dato['total'];?></td>
            <td><?php echo $dato['fecha'];?></td>
            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'compras'; ?>')">Editar</button></td> 
            <!-- <td><button onclick="editar(<?php echo $dato['id'];?>,<?php echo $dato['proveedor_id'];?>,<?php echo $dato['total'];?>,<?php echo $dato['fecha'];?>)" >Editar</button></td> -->
            <!-- <td><button onclick="eliminar(<?php echo $dato['id'];?>)" >Eliminar</button></td> -->
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/compras/eliminar.php', 'contenedor1')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>