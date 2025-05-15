<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <!-- . https://github.com/emancilla01/ventas.git -->
    <link rel="stylesheet" href="/css/estilos.css">
    <script defer src="/js/funciones.js" ></script>
    
</head>
<body>
    <div>
        <aside>
            <ul>
                <li><a href="#" onclick="ver('/categorias/index.php')">Categorias</a></li>
                <li><a href="#" onclick="ver('/articulos/index.php')">Articulos</a></li>
                <li><a href="#" onclick="ver('/proveedores/index.php')">Proveedores</a></li>
                <li><a href="#" onclick="ver('/usuarios/index.php')">Usuarios</a></li>
                <li><a href="#" onclick="ver('/compras/index.php')">Compras</a></li>
                <li><a href="#" onclick="ver('/ventas/ventas.php')">Ventas</a></li>
                <li><a href="#" onclick="ver('/pagos/index.php')">Pagos</a></li>
                <li><a href="#" onclick="ver('/notificaciones/notificaciones.php')">Notificaciones</a></li>                
            </ul>
        </aside>
        <section>
            <header>
                <h1>Tennis & Whiskey</h1>
                <span id="nombreUsuario"></span>
                <button onclick="ver('/Login.html')">Login</button>
            </header>
            <div id="contenedor1">            
                <article>
                    <p style="padding: 10px;"> Bienvenido a Tennis & Whiskey.
                    Una plataforma donde el diseño se mezcla con lo auténtico, y lo moderno con ese toque rudo que nunca pasa de moda.
                    Aquí no se trata solo de comprar o vender: se trata de encontrar piezas con carácter, objetos con historia, y darles un lugar en tu vida.
                    Estás en el lugar correcto para hacer tratos con estilo, sin prisas y sin poses.
                    Esto es Tennis & Whiskey. Bienvenido al lado fino del intercambio.</p>
                </article>            
            </div>
            <footer>
                <h5>Derechos reservados.</h5>
            </footer>
        </section>
    </div>
</body>

</html>