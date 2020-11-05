<?php

include '../conexion/conexion.php';

$id=$_POST['id'];;
$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$celular=$_POST['celular'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$ubicacion=$_POST['ubicacion'];


$baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Proveedor;
    $resultado = $coleccion->insertOne([
        "Cod_prove" => $id , 
        "RUT_prove" => $nombre  ,
        "Nom_prove" => $nombre ,
        "Mov_prove" => $celular ,
        "Tel_prove" => $telefono ,
        "corr_prove" => $correo ,
        "Dire_prove" => $direccion ,
        "Ubicacion" => $ubicacion,

    ]);
    

?>
