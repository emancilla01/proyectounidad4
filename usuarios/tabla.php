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
    $sql = "SELECT * FROM usuarios $where";
    $datos = $db->obtenerRegistros($sql);
}
?>
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

            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'usuarios'; ?>')">Editar</button></td>
            <td><button onclick="eliminar2('<?php echo $dato['id']; ?>','<?php echo 'usuarios'; ?>')">Eliminar</button></td>
        </tr>
        <?php } ?>
    </table>