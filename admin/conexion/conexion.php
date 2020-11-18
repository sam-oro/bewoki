<?php
    require_once __DIR__ . "/vendor/autoload.php";

    function obtenerBaseDeDatos(){
        $host = "localhost";
        $puerto = "27017";
        $nombreBD = "bewoki";
        # Crea algo como mongodb://localhost:27017/agenda
        $cadenaConexion = sprintf("mongodb://%s:%s/%s", $host, $puerto, $nombreBD);
        $conn = new MongoDB\Client($cadenaConexion);
        return $conn->selectDatabase($nombreBD);
    }

    $URL = "http://localhost/bewoki/";
?>