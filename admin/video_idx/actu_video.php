<?php
include '../conexion/conexion.php';

$nombre = $_POST['nombre'];

//Evalua si el campo del URL esta vacio para validar si se guarda un url o una ruta de directorio
if ($_POST['url'] != "") {
    //Si se URL no esta vacio
    $url=$_POST['url'];

    //Se reemplaza el indicador "watch?v=" por "embed/" para que el video se inserte correctamente
    $varPHP = str_replace('watch?v=', 'embed/', $url);

    $baseDeDatos = obtenerBaseDeDatos();
    $coleccion = $baseDeDatos->video_index;
    $resultado = $coleccion->updateOne(
        // El criterio, algo así como where
        ["_id" => new MongoDB\BSON\ObjectId("5fa406c23b317c9865f61603")],
        // Nuevos valores, no es necesario poner todos pero aquí es para ejemplificar
        [
            '$set' => [
                "Titulo" => $nombre,
                "Url" => $varPHP,
            ]
        ]
    );
}else{
    //Si URL esta vacio se toman los datos que traiga del selector de ficheros
    $nombv = $_FILES['video']['name'];
    $guardado = $_FILES['video']['tmp_name'];

    //Evalua si el directorio donde se guardaran los videos existe
    if(!file_exists('videos')){

        //Si el directorio no existe es creado automaticamente
        mkdir('videos',0777,true);

        //Vuelve a evaluar si existe el directorio para despues guardar el video en el
        if(file_exists('videos')){

            //Guarda una copia del video seleccionado en el directorio, si se guardo correctamente se realiza la consulta de UPDATE para el video del Index, si no saca un mensaje
            if (move_uploaded_file($guardado, 'videos/'.$nombv)) {

                //Renombra el video para que tenga el nombre de la pagina en la que va a ir ubicada
                rename( 'videos/'.$nombv, 'videos/index.mp4');
                echo "Archivo Guardado con exito";

                $varPHP="admin/video_idx/videos/index.mp4";
                $baseDeDatos = obtenerBaseDeDatos();
                $coleccion = $baseDeDatos->video_index;
                $resultado = $coleccion->updateOne(
                    // El criterio, algo así como where
                    ["_id" => new MongoDB\BSON\ObjectId("5fa406c23b317c9865f61603")],
                    // Nuevos valores, no es necesario poner todos pero aquí es para ejemplificar
                    [
                        '$set' => [
                            "Titulo" => $nombre,
                            "Url" => $varPHP,
                        ],
                    ]
                );
            }else{
                echo "Archivo no se pudo guardar ya sea por el tamaño o porque la extenxion no es .mp4";
            }
        }
    }else{
        if(move_uploaded_file($guardado, 'videos/'.$nombv)) {
            rename( 'videos/'.$nombv, 'videos/index.mp4');
            echo "Archivo Guardado con exito";

            $varPHP="admin/video_idx/videos/index.mp4";
            $baseDeDatos = obtenerBaseDeDatos();
            $coleccion = $baseDeDatos->video_index;
            $resultado = $coleccion->updateOne(
                // El criterio, algo así como where
                ["_id" => new MongoDB\BSON\ObjectId("5fa406c23b317c9865f61603")],
                // Nuevos valores, no es necesario poner todos pero aquí es para ejemplificar
                [
                    '$set' => [
                        "Titulo" => $nombre,
                        "Url" => $varPHP,
                    ],
                ]
            );
        }else{
            echo "Archivo no se pudo guardar ya sea por el tamaño o porque la extenxion no es .mp4";
        }
    }
}
?>
