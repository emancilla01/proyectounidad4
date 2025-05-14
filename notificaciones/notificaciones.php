<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_REQUEST['id'];    
    $idusuario = isset($_REQUEST['idusuario']) ? $_REQUEST['idusuario'] : null;
    $idventa = isset($_REQUEST['idventa']) ? $_REQUEST['idventa'] : null;
    $montopagado = isset($_REQUEST['montopagado']) ? $_REQUEST['montopagado'] : null;    
    $tipo = isset($_REQUEST['tipo']) ? $_REQUEST['tipo'] : null;
    $mensaje = isset($_REQUEST['mensaje']) ? $_REQUEST['mensaje'] : null;
    $fechaenvio = isset($_REQUEST['fechaenvio']) ? $_REQUEST['fechaenvio'] : null;    
    $estado = isset($_REQUEST['estado']) ? $_REQUEST['estado'] : null;       
    $accion = $_REQUEST['accion'];    

    if ($accion === "consultar") {
        $sql = "SELECT * FROM notificaciones;";   
    } elseif ($accion === "insertar") {
        $sql = "INSERT INTO notificaciones ('id', 'idusuario', 'idventa','montopagado', 'tipo', 'mensaje', 'fechaenvio', 'estado') 
                VALUES ('$id', '$idusuario', '$montopagado',  '$tipo', '$mensaje', '$fechaenvio', estado)";
    } elseif ($accion === "editar") {
        $sql = "SELECT * FROM notificaciones WHERE id = '$id'";
    } elseif ($accion === "actualizar") {
        $sql = "UPDATE notificaciones SET idusuario = '$idusuario', idventa = '$idventa', montopagado = '$montopagado',  tipo = '$tipo', mensaje = '$mensaje',
        fechaenvio = '$fechaenvio', estado = '$estado'
        WHERE id = '$id'";
    } elseif ($accion === "eliminar") {
        $sql = "DELETE FROM notificaciones WHERE id = '$id'";
    }
    else {
        $sql = "Acción no válida.";
    }

    echo $sql;
    exit; // evita que también se muestre el HTML
}
?>
<article>
    <h2>Notificaciones</h2>
    <form action="/index.html" method="post" id="notificaciones" onsubmit="return false;">
    
    <!-- <label for=""></label> -->
    <label for="id">Id :</label>
    <input type="number" name="id" id="id">

    <label for="idusuario">Id Usuario :</label>
    <input type="number" name="idusuario" id="idusuario">

    <label for="idventa">Id Venta :</label>
    <input type="number" name="idventa" id="idventa">

    <label for="montopagado">Monto Pagado :</label>
    <input type="number" step="0.01" name="montopagado" id="montopagado">

    <label for="tipo">Tipo :</label>
    <select name="tipo" id="tipo">
        <option value="1">SMS</option>
        <option value="2">email</option>
        <option value="3">WhatsApp</option>
    </select>

    <label for="mensaje">Mensaje :</label>
    <textarea name="mensaje" id="mensaje"></textarea>

    <label for="fechaenvio">Fecha Envio:</label>
    <input type="datetime-local" name="fechaenvio" id="fechaenvio">

    <label for="estado">Estado :</label>
    <select name="estado" id="estado">
        <option value="1">opcion1</option>
        <option value="2">opcion2</option>
        <option value="3">opcion3</option>
    </select>
    
    <!-- <label></label>
    <button type="button" onclick="enviar()">Enviar</button> -->
    
    
    <button onclick="peticiones('consultar', '/notificaciones/notificaciones.php', 'notificaciones')">Consultar</button>
    <button onclick="peticiones('insertar', '/notificaciones/notificaciones.php', 'notificaciones')">Insertar</button>
    <button onclick="peticiones('editar', '/notificaciones/notificaciones.php', 'notificaciones' )">Editar</button>
    <button onclick="peticiones('actualizar', '/notificaciones/notificaciones.php', 'notificaciones')">Actualizar</button>
    <button onclick="peticiones('eliminar', '/notificaciones/notificaciones.php', 'notificaciones')">Eliminar</button>

</form>
</article>
<div id="resultados" style="margin-top: 20px;"></div>