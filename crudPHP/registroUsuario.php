<?php
include ('conexion.php');
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$telefono = $_GET['telefono'];

// echo $nombre,$correo,$telefono;
$sql = "INSERT INTO usuarios (Nombre,email,telefono)VALUES('$nombre','$correo','$telefono')";


if($conn->query($sql) === TRUE){
    header( 'Location: index.php');
    exit();
}else{
    echo "Error: ".$sql;
}