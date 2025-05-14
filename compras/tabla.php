
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['nombre'];?></td>
            <td><?php echo $dato['descripcion'];?></td>
            <td><?php echo $dato['precio'];?></td>
            <td><?php echo $dato['stock'];?></td>
            <td><button onclick="editar(<?php echo $dato['id'];?>,'<?php echo $dato['nombre'];?>')" >Editar</button></td>
            <!-- <td><button onclick="eliminar(<?php echo $dato['id'];?>)" >Eliminar</button></td> -->
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/articulos/eliminar.php', 'contenedor1')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>