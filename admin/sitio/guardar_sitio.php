<?php
    include "../conexion/conexion.php";

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];
    $correo = $_POST['correo'];

    $baseDeDatos = obtenerBaseDeDatos();
    # Acceder a la colección contactos
    $coleccion = $baseDeDatos->Sitio_Turistico;
    $resultado = $coleccion->insertOne([
        "Nombre" => $nombre , 
        "Telefono" => $telefono ,
        "Correo" => $correo,
        "Latitud" => $latitud ,
        "Longitud" => $longitud ,
        
    ]);
?>