<?php

include '../../admin/conexion/conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];;
$correo=$_POST['correo'];
$contra=$_POST['contrasena'];
$edad=$_POST['edad'];
$celular=$_POST['celular'];


$baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Cliente_Natural;
    $resultado = $coleccion->insertOne([
        "Nom_Clie" => $nombre , 
        "Ape_Clie" => $apellido ,
        "Edad_Clie" => $edad ,
        "Mov_Clie" => $celular ,
        "Corr_usuario" => $correo ,
        "Contraseña" => $contra ,
        "Rol_usuario" => 1 ,
        "Dire_Clie" => $direccion ,

    ]);
    
    echo "<script> 	alert ('Registrado Con exito'); </script>";
    echo "<script> 	location.href='iniciar_sesion.php'; </script>";

?>
