<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ya ha iniciado sesión
if(isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    echo "Bienvenido, $usuario.<br>";
    echo "<a href='logout.php'>Cerrar sesión</a>";
} else {
    // Si el usuario no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
