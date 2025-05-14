
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contraseña</th>            
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['nombre'];?></td>
            <td><?php echo $dato['email'];?></td>
            <td><?php echo $dato['contraseña'];?></td>                      
            <td><button onclick="editar(<?php echo $dato['id'];?>,'<?php echo $dato['nombre'];?>', '<?php echo $dato['email'];?>', '<?php echo $dato['contraseña'];?>')" >Editar</button></td>
            <!-- <td><button onclick="eliminar(<?php echo $dato['id'];?>)" >Eliminar</button></td> -->
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/usuarios/eliminar.php', 'contenedor1')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>