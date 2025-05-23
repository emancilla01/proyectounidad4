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
    $sql = "SELECT * FROM compras $where"; 
    $datos = $db->obtenerRegistros($sql);
}
?>
    <table>
        <tr>
            <th>Id</th>
            <th>Id Proveedor</th>
            <th>Total</th>
            <th>Fecha</th>
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['proveedor_id'];?></td>
            <td><?php echo $dato['total'];?></td>
            <td><?php echo $dato['fecha'];?></td>
            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'compras'; ?>')">Editar</button></td> 
            <td><button onclick="eliminar2('<?php echo $dato['id']; ?>','<?php echo 'compras'; ?>')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>