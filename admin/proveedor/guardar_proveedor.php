<?php

include '../conexion/conexion.php';

$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$celular=$_POST['celular'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$contraseña=$_POST['contraseña'];


$baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Proveedor;
    $resultado = $coleccion->insertOne([ 
        "RUT_prove" => $rut  ,
        "Nom_prove" => $nombre ,
        "Mov_prove" => $celular ,
        "Tel_prove" => $telefono ,
        "corr_prove" => $correo ,
        "Dire_prove" => $direccion ,
        "Password_prove" => $contraseña,

    ]);
    
    echo "<script> 	alert ('Ingresado con exito'); </script>";
    echo "<script> 	location.href='../../vistas/proveedor/form_proveedor.php'; </script>";

?>
