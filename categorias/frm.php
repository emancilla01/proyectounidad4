
<article>
    <h2>Categorias</h2>
    <form action="/index.html" method="post" id="categorias" onsubmit="return false;"> 
        
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" value="" readonly>

        <label for="nombre">Nombre :</label>
        <input type="text" name="nombre" id="nombre">
                
        
        <button onclick="enviardatos('categorias', '/categorias/ins_act.php', 'contenedor1')">Grabar</button>
    </form>    
</article>
