<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_REQUEST['id'];    
    $idproveedor = isset($_REQUEST['idproveedor']) ? $_REQUEST['idproveedor'] : null;
    $idarticulo = isset($_REQUEST['idarticulo']) ? $_REQUEST['idarticulo'] : null;
    $idcompra = isset($_REQUEST['idcompra']) ? $_REQUEST['idcompra'] : null;
    $total = isset($_REQUEST['total']) ? $_REQUEST['total'] : null;
    $fecha = isset($_REQUEST['fecha']) ? $_REQUEST['fecha'] : null;    
    $cantidad = isset($_REQUEST['cantidad']) ? $_REQUEST['cantidad'] : null;
    $preciounit = isset($_REQUEST['preciounit']) ? $_REQUEST['preciounit'] : null;    
    $subtotal = isset($_REQUEST['subtotal']) ? $_REQUEST['subtotal'] : null;    
    $accion = $_REQUEST['accion'];
    

    if ($accion === "consultar") {
        $sql = "SELECT * FROM compras;";   
    } elseif ($accion === "insertar") {
        $sql = "INSERT INTO compras ('id', 'idproveedor', 'total', 'fecha') 
                VALUES ('$id', '$idproveedor', '$total', '$fecha')";
    } elseif ($accion === "editar") {
        $sql = "SELECT * FROM compras WHERE id = '$id'";
    } elseif ($accion === "actualizar") {
        $sql = "UPDATE compras SET idproveedor = '$idproveedor', total = '$total', fecha = '$fecha',
        WHERE id = '$id'";
    } elseif ($accion === "eliminar") {
        $sql = "DELETE FROM compras WHERE id = '$id'";
    }
    
    elseif ($accion === "consultardetalle") {
        $sql = "SELECT * FROM compras;";   
    } elseif ($accion === "insertardetalle") {
        $sql = "INSERT INTO compras ('id', 'idcompra', 'idarticulo', 'cantidad', 'preciounit', 'subtotal') 
                VALUES ('$id', '$idcompra', '$idarticulo', '$cantidad', '$preciounit', '$subtotal')";
    } elseif ($accion === "editardetalle") {
        $sql = "SELECT * FROM compras WHERE id = '$id'";
    } elseif ($accion === "actualizardetalle") {
        $sql = "UPDATE compras SET idcompra = '$idcompra', idarticulo = '$idarticulo', cantidad = '$cantidad', 
        preciounit = '$preciounit', subtotal = '$subtotal'
        WHERE id = '$id'";
    } elseif ($accion === "eliminardetalle") {
        $sql = "DELETE FROM compras WHERE id = '$id'";
    }
    else {
        $sql = "Acción no válida.";
    }

    echo $sql;
    exit; // evita que también se muestre el HTML
}
?>
<article>
    <h2>Compras</h2>
    <form action="/index.html" method="post" id="compras" onsubmit="return false;">
        
        <!-- <label for=""></label> -->
        <label for="id">Id:</label>
        <input type="number" name="id" id="id">

        <label for="idproveedor">Id Proveedor :</label>
        <input type="number" name="idproveedor" id="idproveedor">

        <label for="total">Total :</label>
        <input type="number" step="0.01" name="total" id="total">

        <label for="fecha">fecha :</label>
        <input type="datetime-local" name="fecha" id="fecha">
                
        <!-- <label></label>
        <button type="button" onclick="enviar()">Enviar</button> -->

        

    </form>

    <h2>Detalle de Compras</h2>
    <form action="/index.html" method="post" id="det_compras" onsubmit="return false;">
        
        <!-- <label for=""></label> -->
        <label for="id">Id:</label>
        <input type="number" name="id" id="id">

        <label for="idcompra">Id Compra :</label>
        <input type="number" name="idcompra" id="idcompra">

        <label for="idarticulo">Id Articulo :</label>
        <input type="number" name="idarticulo" id="idarticulo">

        <label for="cantidad">Cantidad :</label>
        <input type="number" name="cantidad" id="cantidad">

        <label for="preciounit">Precio Unitario :</label>
        <input type="number" step="0.01" name="preciounit" id="preciounit">

        <label for="subtotal">Subtotal :</label>
        <input type="number" step="0.01" name="subtotal" id="subtotal">    
        
                


    </form>
</article>
