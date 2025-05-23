<?php
if (!isset($datos)) {
    include_once "../db/db.php";
    $db = new db();
    $db->conectar();

    $where = "";
    if (isset($_GET['columna']) && isset($_GET['valor']) && $_GET['valor'] !== "") {
        $columna = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['columna']); 
        $valor = htmlspecialchars($_GET['valor']);
        $where = " WHERE $columna LIKE '%$valor%'";
    }
    $sql = "SELECT * FROM notificaciones $where"; 
    $datos = $db->obtenerRegistros($sql);
}
?>
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
        </tr>
        <?php } ?>
    </table>