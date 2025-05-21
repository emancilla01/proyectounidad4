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
    $sql = "SELECT * FROM pagos $where"; // Cambia 'articulos' por la tabla correspondiente
    $datos = $db->obtenerRegistros($sql);
}
?>
    <table>
        <tr>
            <th>ID</th>
            <th>ID Venta</th>
            <th>Monto Pagado</th>
            <th>Metodo de Pago</th>
            <th>Fecha Pago</th>
            <th>Saldo Restante</th>
            <th>Interes Generado</th>
        </tr>
        <?php
            foreach ($datos as $dato) { ?>              
           
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['venta_id'];?></td>
            <td><?php echo $dato['monto_pagado'];?></td>
            <td><?php echo $dato['metodo_pago'];?></td>
            <td><?php echo $dato['fecha_pago'];?></td>
            <td><?php echo $dato['saldo_restante'];?></td>
            <td><?php echo $dato['interes_generado'];?></td>

            <td><button onclick="  editar('<?php echo $dato['id']; ?>','<?php echo 'pagos'; ?>')">Editar</button></td>
            <td><button onclick="eliminar2('<?php echo $dato['id']; ?>','<?php echo 'pagos'; ?>')">Eliminar</button></td>

            <!-- <td><button onclick="editar(<?php echo addslashes ($dato['id']);?>,'<?php echo addslashes ($dato['idventa']);?>', 
            '<?php echo addslashes ($dato['montopagado']);?>', '<?php echo addslashes ($dato['metodopago']);?>', '<?php echo addslashes ($dato['fechapago']);?>', 
            '<?php echo addslashes ($dato['saldorest']);?>', '<?php echo addslashes ($dato['interesgenerado']);?>' )" >Editar</button></td>
            <td><button onclick="eliminar(<?php echo $dato['id']; ?>, '/pagos/eliminar.php', 'contenedor1')" >Eliminar</button></td> -->
        </tr>
        <?php } ?>
    </table>