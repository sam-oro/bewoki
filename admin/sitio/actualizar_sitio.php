<?php

include '../conexion/conexion.php';
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$tel=$_POST['tel'];
$correo=$_POST['correo'];
$cel=$_POST['lat'];
$cont=$_POST['long'];


$baseDeDatos = obtenerBaseDeDatos();
$coleccion = $baseDeDatos->Sitio_Turistico;

$resultado = $coleccion->updateOne(
    // El criterio, algo así como where
    ["_id" => new MongoDB\BSON\ObjectId($id)],
    // Nuevos valores, no es necesario poner todos pero aquí es para ejemplificar
    [
        '$set' => [
            'Nom_sitio' => $nombre,
            'Tel_sitio' => $tel,
            'Corr_sitio' => $correo,
            'Lat_sitio' => $cel,
            'Lon_sitio' => $cont,
        ],
    ]
);

echo "<script> alert('actualizado copn exito') </script>";

echo "<script> location.href='form_sitio.php'; </script>";


?>