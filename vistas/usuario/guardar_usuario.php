<?php

include '../conexion/conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];;
$correo=$_POST['correo'];
$contra=$_POST['con1'];


$baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Usuario;
    $resultado = $coleccion->insertOne([
        "Nom_usuario" => $nombre , 
        "Ape_usuario" => $apellido ,
        "Corr_usuario" => $correo ,
        "Rol_usuario" => 1 ,
        "Mov_prove" => $celular ,

    ]);
    

?>
