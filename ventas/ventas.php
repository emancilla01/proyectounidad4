<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_REQUEST['id'];    
    $idusuario = isset($_REQUEST['idusuario']) ? $_REQUEST['idusuario'] : null;
    $total = isset($_REQUEST['total']) ? $_REQUEST['total'] : null;
    

    $tipopago = isset($_REQUEST['tipopago']) ? $_REQUEST['tipopago'] : null;
    $estado = isset($_REQUEST['estado']) ? $_REQUEST['estado'] : null;
    $saldopend = isset($_REQUEST['saldopend']) ? $_REQUEST['saldopend'] : null;
        
    $fecha = isset($_REQUEST['fecha']) ? $_REQUEST['fecha'] : null;   
    
    $fechalimit = isset($_REQUEST['fechalimit']) ? $_REQUEST['fechalimit'] : null;
    $tasainteres = isset($_REQUEST['tasainteres']) ? $_REQUEST['tasainteres'] : null;

    $idventa = isset($_REQUEST['idventa']) ? $_REQUEST['idventa'] : null;
    $idarticulo = isset($_REQUEST['idarticulo']) ? $_REQUEST['idarticulo'] : null;
    
    $idventa = isset($_REQUEST['idventa']) ? $_REQUEST['idventa'] : null;
    $cantidad = isset($_REQUEST['cantidad']) ? $_REQUEST['cantidad'] : null;
    $preciounit = isset($_REQUEST['preciounit']) ? $_REQUEST['preciounit'] : null;    
    $subtotal = isset($_REQUEST['subtotal']) ? $_REQUEST['subtotal'] : null;    
    $accion = $_REQUEST['accion'];
    

    if ($accion === "consultar") {
        $sql = "SELECT * FROM ventas;";   
    } elseif ($accion === "insertar") {
        $sql = "INSERT INTO ventas ('id', 'idusuario', 'total', 'tipopago', 'estado', 'saldopend', 'fecha', 'fechalimit', 'tasainteres') 
                VALUES ('$id', '$idusuario', '$total', '$tipopago', '$estado', '$saldopend', '$fecha', '$fechalimit', '$tasainteres')";
    } elseif ($accion === "editar") {
        $sql = "SELECT * FROM ventas WHERE id = '$id'";
    } elseif ($accion === "actualizar") {
        $sql = "UPDATE ventas SET idusuario = '$idusuario', total = '$total', tipopago = '$tipopago', estado = '$estado',
        saldopend = '$saldopend', fecha = '$fecha', fechalimit = '$fechalimit', tasainteres = '$tasainteres'
        WHERE id = '$id'";
    } elseif ($accion === "eliminar") {
        $sql = "DELETE FROM ventas WHERE id = '$id'";
    }
    
    elseif ($accion === "consultardetalle") {
        $sql = "SELECT * FROM ventas;";   
    } elseif ($accion === "insertardetalle") {
        $sql = "INSERT INTO ventas ('id', 'idventa', 'idarticulo', 'cantidad', 'preciounit', 'subtotal') 
                VALUES ('$id', '$idventa', '$idarticulo', '$cantidad', '$preciounit', '$subtotal')";
    } elseif ($accion === "editardetalle") {
        $sql = "SELECT * FROM ventas WHERE id = '$id'";
    } elseif ($accion === "actualizardetalle") {
        $sql = "UPDATE ventas SET idventa = '$idventa', idarticulo = '$idarticulo', cantidad = '$cantidad', 
        preciounit = '$preciounit', subtotal = '$subtotal'
        WHERE id = '$id'";
    } elseif ($accion === "eliminardetalle") {
        $sql = "DELETE FROM ventas WHERE id = '$id'";
    }
    else {
        $sql = "Acción no válida.";
    }

    echo $sql;
    exit; // evita que también se muestre el HTML
}
?>
<article>
    <h3>Ventas</h3>
    <form action="/index.html" method="post" id="ventas" onsubmit="return false;">
    
        <!-- <label for=""></label> -->
        <label for="id">Id :</label>
        <input type="number" name="id" id="id">

        <label for="idusuario">Id Usuario :</label>
        <input type="number" name="idusuario" id="idusuario">

        <label for="total">Total :</label>
        <input type="number" step="0.01" name="total" id="total">

        <label for="tipopago">Tipo de Pago :</label>
        <select name="tipopago" id="tipopago">
            <option value="1">Efectivo</option>
            <option value="2">Tarjeta</option>
            <option value="3">Transferencia</option>
        </select>

        <label for="estado">Estado :</label>
        <select name="estado" id="estado">
            <option value="1">Coahuila</option>
            <option value="2">Nuevo Leon</option>
            <option value="3">Baja California</option>
        </select>
        
        <label for="saldopend">Saldo Pendiente :</label>
        <input type="number" step="0.01" name="saldopend" id="saldopend">

        <label for="fecha">Fecha :</label>
        <input type="datetime-local" name="fecha" id="fecha">

        <label for="fechalimit">Fecha Limite Pago :</label>
        <input type="date" name="fechalimit" id="fechalimit">

        <label for="tasainteres">Tasa Interes :</label>
        <input type="number" step="0.01" name="tasainteres" id="tasainteres">   


        <!-- <label></label>
        <button type="button" onclick="enviar()">Enviar</button> -->

        <button onclick="peticiones('consultar', '/ventas/ventas.php', 'ventas')">Consultar</button>
        <button onclick="peticiones('insertar', '/ventas/ventas.php', 'ventas')">Insertar</button>
        <button onclick="peticiones('editar', '/ventas/ventas.php', 'ventas' )">Editar</button>
        <button onclick="peticiones('actualizar', '/ventas/ventas.php', 'ventas')">Actualizar</button>
        <button onclick="peticiones('eliminar', '/ventas/ventas.php', 'ventas')">Eliminar</button>

    </form>
    <h3>Detalle de Ventas</h3>
    <form action="/index.html" method="post" id="detalleventas" onsubmit="return false;">
        
        <!-- <label for=""></label> -->
        <label for="id">Id:</label>
        <input type="number" name="id" id="id">

        <label for="idventa">Id Venta :</label>
        <input type="number" name="idventa" id="idventa">

        <label for="idarticulo">Id Articulo :</label>
        <input type="number" name="idarticulo" id="idarticulo">

        <label for="cantidad">Cantidad :</label>
        <input type="number" name="cantidad" id="cantidad">

        <label for="preciounit">Precio Unitario :</label>
        <input type="number" step="0.01" name="preciounit" id="preciounit">

        <label for="subtotal">Subtotal :</label>
        <input type="number" step="0.01" name="subtotal" id="subtotal">    
        
        
        <!-- <label></label>
        <button type="button" onclick="enviar()">Enviar</button> -->

        <button onclick="peticiones('consultardetalle', '/ventas/ventas.php', 'detalleventas')">Consultar</button>
        <button onclick="peticiones('insertardetalle', '/ventas/ventas.php', 'detalleventas')">Insertar</button>
        <button onclick="peticiones('editardetalle', '/ventas/ventas.php', 'detalleventas' )">Editar</button>
        <button onclick="peticiones('actualizardetalle', '/ventas/ventas.php', 'detalleventas')">Actualizar</button>
        <button onclick="peticiones('eliminardetalle', '/ventas/ventas.php', 'detalleventas')">Eliminar</button>

    </form>
</article>
<div id="resultados" style="margin-top: 20px;"></div>