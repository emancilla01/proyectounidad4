<?php
session_start();
// var_dump($_REQUEST);

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




// validar original
// $usuario = $_REQUEST['usuario'];
// $clave = $_REQUEST['clave'];
// if ($usuario === 'administrador'){
//     if ($clave === '123') {
//         echo "Ezequiel Mancilla";
//     }
//     else {
//         echo "Clave incorrecta.";
//     }
// }
// else
// {
//     echo "Usuario no valido.";
// }
?>