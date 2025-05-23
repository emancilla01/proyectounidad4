<article>
    <h2>Notificaciones</h2>
    <form action="/index.html" method="post" id="notificaciones" onsubmit="return false;"> 
        
        <label for="id">Id :</label>
        <input type="text" name="id" id="id">

        <label for="usuario_id">Id Usuario :</label>
        <select name="usuario_id" id="usuario_id">
            <?php foreach ($usuarios as $usuario) { 
                echo "<option value='" . $usuario["id"] . "'>" 
                                    . $usuario["nombre"] ."
                    </option>";
            } ?>
        </select>

        <label for="venta_id">Id Venta :</label>
        <select name="venta_id" id="venta_id">
            <?php foreach ($ventas as $venta) { 
                echo "<option value='" . $venta["id"] . "'>" 
                                    . $venta["id"] ."
                    </option>";
            } ?>
        </select>
        
        <label for="tipo">Tipo :</label>
        <select name="tipo" id="tipo">
            <option value="recordatorio">Recordatorio</option>
            <option value="vencimiento">Vencimiento</option>
            <option value="mora">Mora</option>
        </select>

        <label for="mensaje">Mensaje :</label>
        <textarea name="mensaje" id="mensaje"></textarea>        

        <label for="fecha_envio">Fecha Envio:</label>
        <input type="datetime-local" name="fecha_envio" id="fecha_envio">

        <label for="estado">Estado :</label>
        <select name="estado" id="estado">
            <option value="pendiente">Pendiente</option>
            <option value="enviado">Enviado</option>
            <option value="visto">Visto</option>
        </select>
                
        <label for=""></label>
        <button onclick="enviardatos('notificaciones', '/notificaciones/ins_act.php', 'contenedor1')">Grabar</button>
    </form>    
</article>