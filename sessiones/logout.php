<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir al usuario al índice
header("Location: index.php");
exit();
?>
