<?php

include '../conexion/conexion.php';
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$movil=$_POST['movil'];
$correo=$_POST['correo'];


$baseDeDatos = obtenerBaseDeDatos();
$coleccion = $baseDeDatos->Asistente;

$resultado = $coleccion->updateOne(
    // El criterio, algo así como where
    ["_id" => new MongoDB\BSON\ObjectId($id)],
    // Nuevos valores, no es necesario poner todos pero aquí es para ejemplificar
    [
        '$set' => [
            "Nombre" => $nombre,
            "movil" => $movil,
            "correo" => $correo,
        ],
    ]
);

//echo "<script> alert('actualizado copn exito') </script>";

echo "<script> location.href='form_asistente.php?msg=2'; </script>";




?>