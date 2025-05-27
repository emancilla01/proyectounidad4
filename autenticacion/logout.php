<?php
session_start();
session_destroy();
header("Location: /login.html");
echo "Sesión cerrada";
exit;
?>