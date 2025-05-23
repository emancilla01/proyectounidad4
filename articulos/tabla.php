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
    $sql = "SELECT * FROM articulos $where"; 
    $datos = $db->obtenerRegistros($sql);
}
?>
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

            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'articulos'; ?>')">Editar</button></td>
            <td><button onclick="eliminar2('<?php echo $dato['id']; ?>','<?php echo 'articulos'; ?>')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>