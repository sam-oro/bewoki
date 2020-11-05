<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>videos</title>
</head>
<body>

<?php
include "../admin/conexion/conexion.php";

$baseDeDatos = obtenerBaseDeDatos();
$coleccion = $baseDeDatos->video_index;
$cursor = $coleccion->find(); // Sin criterio de búsqueda

foreach ( $cursor as $id => $valor )
{
    $row=json_decode(json_encode($valor),true);
    echo $row['Titulo'].":<br>";
    echo $row['Url']."<br>";
    echo('<iframe width="560" height="315" src="'.$row['Url'].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
}

/*$baseDeDatos = obtenerBaseDeDatos();
$coleccion = $baseDeDatos->video_index;
$result = $coleccion->find(); // Sin criterio de búsqueda

foreach ( $result as $row)
{
    $row=json_decode(json_encode($result->toArray()[1]),true);
    print_r($row);
}*/

/*
$sel = $conn ->query("SELECT * FROM tblvideo where cod='1'");

while ($row=$sel->fetch_array()) {

    echo "Titulo: ".$row[1]."<br>";
    echo "Ruta: ".$row[2]."<br>";

    echo('<iframe width="560" height="315" src="'.$row[2].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');	
}*/
?>
</body>
</html>
