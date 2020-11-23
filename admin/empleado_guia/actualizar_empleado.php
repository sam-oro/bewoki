<?php

include '../conexion/conexion.php';
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tel=$_POST['tel'];
$cel=$_POST['cel'];
$cont=$_POST['cont'];
$correo=$_POST['correo'];
$dir=$_POST['dir'];
$prof=$_POST['prof'];
$exp=$_POST['exp'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$ciudad=$_POST['ciudad'];


$baseDeDatos = obtenerBaseDeDatos();
$coleccion = $baseDeDatos->Empleado_Guia;

$resultado = $coleccion->updateOne(
    // El criterio, algo así como where
    ["_id" => new MongoDB\BSON\ObjectId($id)],
    // Nuevos valores, no es necesario poner todos pero aquí es para ejemplificar
    [
        '$set' => [
            "Nom_empleado" => $nombre,
            "Ape_empleado" => $apellido,
            "Tel_empleado" => $tel,
            "Mov_empleado" => $cel,
            "Conta_empleado" => $cont,
            "Corr_empleado" => $correo,
            "Dire_empleado" => $dir,
            "Profe_empleado" => $prof,
            "Expe_empleado" => $exp,
            "Edad_empleado" => $edad,
            "Sexo_empleado" => $sexo,
            "Ciu_empleado" => $ciudad,
        ],
    ]
);

echo "<script> alert('actualizado copn exito') </script>";

echo "<script> location.href='form_empleado.php'; </script>";


?>