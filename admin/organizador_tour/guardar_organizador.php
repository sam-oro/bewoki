<?php

include '../conexion/conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$id=$_POST['id'];
$usuario=$_POST['usuario'];
$celular=$_POST['celular'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$profesion=$_POST['profesion'];
$experiencia=$_POST['experiencia'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];


$baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Organizador_Tour;
    $resultado = $coleccion->insertOne([
        "Nom_orga" => $nombre,
        "Ape_orga" => $apellido,
        "Id_orga" => $id,
        "Usuario_orga" => $usuario,
        "Mov_orga" => $celular,
        "Tel_orga" => $telefono,
        "Corr_orga" => $correo,
        "Dire_orga" => $direccion,
        "Profe_orga" => $profesion,
        "Expe_orga" => $experiencia,
        "Edad_orga" => $edad,
        "Sexo_orga" => $sexo,
    ]);
    

?>
