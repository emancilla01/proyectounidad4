
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['nombre'];?></td>
            <td><button onclick="editar(<?php echo $dato['id'];?>,'<?php echo $dato['nombre'];?>')" >Editar</button></td>
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/categorias/eliminar.php', 'contenedor1')" >Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>