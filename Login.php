<?php
session_start();
if (isset($_SESSION['usuario'])) {
    echo "Bienvenido, " . htmlspecialchars($_SESSION['usuario']) . "<br>";
    echo '<form method="post" action="/autenticacion/logout.php">
            <button type="submit">Cerrar sesión</button>
          </form>';
} else {
?>
<article>
    <form action="/autenticacion/validarusuario.php" method="post" id="autenticacion">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario">
        <label for="">Clave :</label>
        <input type="password" name="clave" id="clave">
        <label></label>
        <input type="button" onclick="enviar()" value="Entrar"></input>
        <div id="contenedor2"></div>
    </form>
</article>
<?php
}
?>
