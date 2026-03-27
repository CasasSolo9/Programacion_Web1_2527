<?php
// Verificar que se enviaron los datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitizar y obtener los datos
    $nombre           = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
    $primer_apellido  = isset($_POST['primer_apellido']) ? htmlspecialchars(trim($_POST['primer_apellido'])) : '';
    $segundo_apellido = isset($_POST['segundo_apellido']) ? htmlspecialchars(trim($_POST['segundo_apellido'])) : '';
    $edad             = isset($_POST['edad']) ? (int)$_POST['edad'] : 0;
    $correo           = isset($_POST['correo']) ? htmlspecialchars(trim($_POST['correo'])) : '';
    $telefono         = isset($_POST['telefono']) ? htmlspecialchars(trim($_POST['telefono'])) : '';
    $password         = isset($_POST['password']) ? $_POST['password'] : ''; // No mostrar la contraseña en producción

    // Validación básica
    if (empty($nombre) || empty($primer_apellido) || empty($correo) || empty($password)) {
        echo "<h2>Error: Faltan campos obligatorios.</h2>";
        echo '<p><a href="formulario.php">Volver al formulario</a></p>';
        exit;
    }

    // Mostrar los datos recibidos
    echo "<h1>Datos recibidos correctamente</h1>";
    echo "<p><strong>Nombre completo:</strong> " . $nombre . " " . $primer_apellido . " " . $segundo_apellido . "</p>";
    echo "<p><strong>Edad:</strong> " . $edad . " años</p>";
    echo "<p><strong>Correo:</strong> " . $correo . "</p>";
    echo "<p><strong>Teléfono:</strong> " . $telefono . "</p>";
    echo "<p><strong>Contraseña:</strong> [No se muestra por seguridad]</p>";

    // Ejemplo de operación con la edad
    $suma = $edad + 10;
    echo "<p><strong>Edad + 10 años:</strong> " . $suma . "</p>";

    echo '<br><p><a href="formulario.php">Volver al formulario</a></p>';

} else {
    echo "<h2>Acceso no permitido.</h2>";
    echo '<p><a href="formulario.php">Ir al formulario</a></p>';
}
?>