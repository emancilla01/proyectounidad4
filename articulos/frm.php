<article>

    <h2>Articulos</h2>
    <form action="/index.html" method="post" id="frm" onsubmit="return false;">
    <label for="id">Id:</label>
    <input type="text" name="id" id="id">

    <label for="nombre">Nombre :</label>
    <input type="text" name="nombre" id="nombre">

    <label for="descripcion">Descripcion :</label>
    <input type="text" name="descripcion" id="descripcion">
    
    <label for="precio">Precio :</label>
    <input type="number" name="precio" id="precio">

    <label for="stock">Stock :</label>
    <input type="number" name="stock" id="stock">
    
    <!-- <label for=""></label>
    <input type="text"> -->
     
    
    <label></label>
    <button onclick="enviardatos('frm', '/articulos/ins_act.php', 'contenedor1')">Grabar</button>
    <button onclick="">Consultar</button>


    </form>


    
</article>
