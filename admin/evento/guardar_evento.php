<?php

include '../conexion/conexion.php';

$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$ciudad=$_POST['ciudad'];
$imagen=$_POST['imagen'];


$baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Eventos;
    $resultado = $coleccion->insertOne([ 
        "Titulo" => $titulo  ,
        "Descripcion" => $descripcion ,
        "Ciudad" => $ciudad ,
        "imagen" => $imagen ,
    ]);
    
    echo "<script> 	alert ('Ingresado con exito'); </script>";
    echo "<script> 	location.href='form_evento.php'; </script>";

?>
