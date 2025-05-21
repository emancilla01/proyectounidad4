<?php
if (!isset($datos)) {
    include_once "../db/db.php";
    $db = new db();
    $db->conectar();

    $where = "";
    if (isset($_GET['columna']) && isset($_GET['valor']) && $_GET['valor'] !== "") {
        $columna = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['columna']); // Seguridad básica
        $valor = htmlspecialchars($_GET['valor']);
        $where = " WHERE $columna LIKE '%$valor%'";
    }
    $sql = "SELECT * FROM ventas $where"; // Cambia 'articulos' por la tabla correspondiente
    $datos = $db->obtenerRegistros($sql);
}
?>
    <table>
        <tr>
            <th>ID</th>
            <th>Id Usuario</th>           
            <th>Total</th>
            <th>Tipo de Pago</th>
            <th>Estado</th>
            <th>Saldo Pendiente</th>
            <th>Fecha</th>
            <th>Fecha Limite Pago</th>
            <th>Tasa Interes</th>            
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>            
            <td><?php echo $dato['usuario_id'];?></td>
            <td><?php echo $dato['total'];?></td>
            <td><?php echo $dato['tipo_pago'];?></td>
            <td><?php echo $dato['estado'];?></td>
            <td><?php echo $dato['saldo_pendiente'];?></td>
            <td><?php echo $dato['fecha'];?></td>
            <td><?php echo $dato['fecha_limite_pago'];?></td>
            <td><?php echo $dato['tasa_interes'];?></td>

            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'ventas'; ?>')">Editar</button></td>
            <td><button onclick="eliminar2('<?php echo $dato['id']; ?>','<?php echo 'ventas'; ?>')">Eliminar</button></td>

            <!-- <td><button onclick="editar(<?php echo $dato['id'];?>,'<?php echo $dato['nombre'];?>')" >Editar</button></td> -->
            <!-- <td><button onclick="eliminar(<?php echo $dato['id'];?>)" >Eliminar</button></td> -->
            <!-- <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/articulos/eliminar.php', 'contenedor1')">Eliminar</button></td> -->
        </tr>
        <?php } ?>
    </table>