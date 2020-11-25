<?php

include '../conexion/conexion.php';
$id=$_POST['id'];
$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$movil=$_POST['movil'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$profesion=$_POST['profesion'];
$experiencia=$_POST['experiencia'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];


$baseDeDatos = obtenerBaseDeDatos();
$coleccion = $baseDeDatos->Organizador_Tour;

$resultado = $coleccion->updateOne(
    // El criterio, algo así como where
    ["_id" => new MongoDB\BSON\ObjectId($id)],
    // Nuevos valores, no es necesario poner todos pero aquí es para ejemplificar
    [
        '$set' => [
            "Nom_orga" => $nombre,
            "Ape_orga" => $apellidos,
            "Id_orga" => $documento,
            "Usuario_orga" => $usuario,
            "Mov_orga" => $movil,
            "Tel_orga" => $telefono,
            "Corr_orga" => $correo,
            "Dire_orga" => $direccion,
            "Profe_orga" => $profesion,
            "Expe_orga" => $experiencia,
            "Edad_orga" => $edad,
            "Sexo_orga" => $sexo,
        ],
    ]
);

//echo "<script> alert('actualizado copn exito') </script>";

echo "<script> location.href='form_organizador.php?msg=2'; </script>";




?>