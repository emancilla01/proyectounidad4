<article>

    <h2>Proveedores</h2>
    <form action="/index.html" method="post" id="frm" onsubmit="return false;">
        <label for="id">Id:</label>
        <input type="text" name="id" id="id">

        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre">

        <label for="contacto">Contacto :</label>
        <input type="text" name="contacto" id="contacto">

        <label for="">Direccion :</label>    
        <textarea name="direccion" id="direccion" ></textarea>
        
        <label for=""></label>
        <button onclick="enviardatos('frm', '/proveedores/ins_act.php', 'contenedor1')">Grabar</button>
        <button onclick="">Consultar</button>
      

    </form>


    
</article>
