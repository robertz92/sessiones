<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <style>
        /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f3f3f3;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 40px;
    width: 300px;
}

.container h2 {
    margin-bottom: 20px;
    text-align: center;
}

/* Estilos para los campos de entrada */
.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 8px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Estilos para el botón de enviar */
button {
    width: 100%;
    background-color: #007bff;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Estilos para el mensaje de error */
.error-message {
    color: red;
    margin-top: 10px;
    text-align: center;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="input-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit">Iniciar sesión</button>
            <?php
            // Manejo de inicio de sesión
            session_start();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Verificar las credenciales del usuario (aquí deberías incluir tu lógica de autenticación)
                $usuario_valido = true; // Supongamos que el usuario es válido por ahora

                if ($usuario_valido) {
                    // Iniciar sesión y redirigir al usuario a la página principal
                    $_SESSION['usuario'] = $_POST['usuario'];
                    header("Location: index.php");
                    exit();
                } else {
                    $error = "Usuario o contraseña incorrectos";
                    echo "<p class='error-message'>$error</p>";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>

