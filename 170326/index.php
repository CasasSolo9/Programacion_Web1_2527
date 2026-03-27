<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<form action="logica.php" method="get">
    <label for="">Nombre:</label>
    <input type="text" maxlength="35" name="nombre">
    <hr>
    <label for="">1er Apellido</label>
    <input type="text"  required name="1erApellido">
    <hr>
    <label for="">2do Apellido</label>
    <input type="text" name="2doApellido">
    <hr>
    <label for="">Edad</label>
    <input type="number" name="edad">
    <hr>
    <label for="">Correo</label>
    <input type="email" name="correo">
    <hr>
    <label for="">Contraseña</label>
    <input type="password" name="password">


    <button type="submit">Enviar</button>

</form>
</body>
</html>