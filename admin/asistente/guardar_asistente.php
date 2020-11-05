<?php

include '../conexion/conexion.php';

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$contrasena=$_POST['password'];
$movil=$_POST['celular'];   
$correo=$_POST['correo'];


$baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Asistente;
    $resultado = $coleccion->insertOne([
        "documento" => $id , 
        "Nombre" => $nombre  ,
        "contraseña" => $contrasena ,
        "movil" => $movil ,
        "correo" => $correo ,
    ]);

?>
