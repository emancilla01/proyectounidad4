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
    $sql = "SELECT * FROM categorias $where"; // Cambia 'articulos' por la tabla correspondiente
    $datos = $db->obtenerRegistros($sql);
}
?>
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

            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'categorias'; ?>')">Editar</button></td>
            <td><button onclick="eliminar2('<?php echo $dato['id']; ?>','<?php echo 'categorias'; ?>')">Eliminar</button></td>

            <!-- <td><button onclick="editar(<?php echo $dato['id'];?>,'<?php echo $dato['nombre'];?>')" >Editar</button></td>
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/categorias/eliminar.php', 'contenedor1')" >Eliminar</button></td> -->
        </tr>
        <?php } ?>
    </table>