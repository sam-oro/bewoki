<?php

include '../conexion/conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$id=$_POST['id'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$contacto=$_POST['contacto'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$profesion=$_POST['profesion'];
$experiencia=$_POST['experiencia'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$ciudad=$_POST['ciudad'];


$baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Empleado_Guia;
    $resultado = $coleccion->insertOne([
        "Nom_empleado" => $nombre,
        "Ape_empleado" => $apellido,
        "Id_empleado" => $id,
        "Tel_empleado" => $telefono,
        "Mov_empleado" => $celular,
        "Conta_empleado" => $contacto,
        "Corr_empleado" => $correo,
        "Dire_empleado" => $direccion,
        "Profe_empleado" => $profesion,
        "Expe_empleado" => $experiencia,
        "Edad_empleado" => $edad,
        "Sexo_empleado" => $sexo,
        "Ciu_empleado" => $ciudad,
    ]);
    

?>
