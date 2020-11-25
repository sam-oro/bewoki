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
        "Nom_sitio" => $nombre , 
        "Tel_sitio" => $telefono ,
        "Corr_sitio" => $correo,
        "Lat_sitio" => $latitud ,
        "Lon_sitio" => $longitud ,
        
    ]);
    //echo "<script> 	alert ('Ingresado con exito'); </script>";
    echo "<script> 	location.href='form_sitio.php?msg=1'; </script>";
?>