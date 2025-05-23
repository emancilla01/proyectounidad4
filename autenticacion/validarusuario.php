<?php
session_start();

// prueba de validacion de usuario
$usuario = $_REQUEST['usuario'];
$clave = $_REQUEST['clave'];

if ($usuario === 'administrador') {
    if ($clave === '123') {
        $_SESSION['usuario'] = 'Ezequiel Mancilla'; // Guarda el nombre en sesión
        echo "Bienvenido, Ezequiel Mancilla";
    } else {
        echo "Clave incorrecta.";
    }
} else {
    echo "Usuario no válido.";
}
?>