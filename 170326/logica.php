<?php
$nombreUsuario = $_GET['nombre'];
echo $nombreUsuario;

$primerApellido = $_GET['1erApellido'];
echo $primerApellido;

$segundoApellido = $_GET['2doApellido'];
echo $segundoApellido;

$edad = $_GET['edad'];
echo $edad;

$correo = $_GET['correo'];
echo $correo;

$password = $_GET['password'];
echo $password;
echo "<br>";
echo "<h1>".$nombreUsuario."</h1><br>"."<br> 1er Apellido".$primerApellido;

$suma = $edad +10;
echo "<br>".$suma;