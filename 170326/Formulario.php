<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
        button { margin-top: 20px; padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer; }
        hr { border: 0; border-top: 1px solid #ddd; margin: 20px 0; }
    </style>
</head>
<body>

<h2>Formulario de Datos</h2>

<form action="logica.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" maxlength="35" name="nombre" required>

    <label for="primer_apellido">Primer Apellido:</label>
    <input type="text" id="primer_apellido" name="primer_apellido" required>

    <label for="segundo_apellido">Segundo Apellido:</label>
    <input type="text" id="segundo_apellido" name="segundo_apellido">

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" min="1" max="120">

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono">

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Enviar Datos</button>
</form>

</body>
</html>