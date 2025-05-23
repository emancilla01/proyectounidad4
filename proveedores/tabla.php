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
    $sql = "SELECT * FROM proveedores $where"; 
    $datos = $db->obtenerRegistros($sql);
}
?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Contacto</th>
            <th>Direccion</th>            
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['nombre'];?></td>
            <td><?php echo $dato['contacto'];?></td>
            <td><?php echo $dato['direccion'];?></td>   

            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'proveedores'; ?>')">Editar</button></td>
            <td><button onclick="eliminar2('<?php echo $dato['id']; ?>','<?php echo 'proveedores'; ?>')">Eliminar</button></td>            
        </tr>
        <?php } ?>
    </table>