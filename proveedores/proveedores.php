<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $contacto = $_REQUEST['contacto'];
    $direccion = $_REQUEST['direccion'];
    $accion = $_REQUEST['accion'];
    

    if ($accion === "consultar") {
        $sql = "SELECT * FROM proveedores;";   
    }elseif ($accion === "insertar") {
        $sql = "INSERT INTO proveedores ('id', 'nombre', 'contacto', 'direccion') 
                VALUES ('$id', '$nombre', '$contacto', '$direccion')";
    } elseif ($accion === "editar") {
        $sql = "SELECT * FROM proveedores WHERE id = '$id'";
    } elseif ($accion === "actualizar") {
        $sql = "UPDATE proveedores SET nombre = '$nombre', contacto = '$contacto', direccion = '$direccion',
        WHERE id = '$id'";
    } elseif ($accion === "eliminar") {
        $sql = "DELETE FROM proveedores WHERE id = '$id'";
    }
    else {
        $sql = "Acción no válida.";
    }

    echo $sql;
    exit; // evita que también se muestre el HTML
}
?>
<article>
    <h2>Proveedores</h2>
    
    <form action="/index.html" method="post" id="proveedores" onsubmit="return false;">
        <label for="id">Id:</label>
        <input type="text" name="id" id="id">

        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre">

        <label for="contacto">Contacto :</label>
        <input type="text" name="contacto" id="contacto">

        <label for="">Direccion :</label>    
        <textarea name="direccion" id="direccion" ></textarea>
        
        <!-- <label for=""></label>
        <button type="button" onclick="enviar()">Enviar</button> -->

        <button onclick="peticiones('consultar', '/proveedores/proveedores.php', 'proveedores')">Consultar</button>
        <button onclick="peticiones('insertar', '/proveedores/proveedores.php', 'proveedores')">Insertar</button>
        <button onclick="peticiones('editar', '/proveedores/proveedores.php', 'proveedores' )">Editar</button>
        <button onclick="peticiones('actualizar', '/proveedores/proveedores.php', 'proveedores')">Actualizar</button>
        <button onclick="peticiones('eliminar', '/proveedores/proveedores.php', 'proveedores')">Eliminar</button>

    </form>
</article>
<div id="resultados" style="margin-top: 20px;"></div>
