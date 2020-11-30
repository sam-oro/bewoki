<?php

include '../../../admin/conexion/conexion.php';

session_start();
        if(!isset($_SESSION['rol'])){
            include '../../../includes/header_inicio.php';
        }else{
            if($_SESSION['rol'] !=1 ){
                if($_SESSION['rol'] ==2 ){
                    include '../../../includes/header_usuario.php';
                }else {
                    if($_SESSION['rol']==3){
                        include '../../../includes/header_vendedor.php';
                    }else {
                        include '../../../includes/header_inicio.php';
                    } 
                }
            }else {
                include '../../../includes/header_admin.php';
            }            
        }

        $id=$_GET['id2'];

?>


                        <?php
                            $baseDeDatos = obtenerBaseDeDatos();
                            $coleccion = $baseDeDatos->Sitio_Turistico;
                            $cursor = $coleccion->find();

                            $con=0;

                            foreach ($cursor as $doc){
                                $row=json_decode(json_encode($doc),true);
                                $con++;
                                }
                            ?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaCard</title>
    
    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../../css/estilos.css">
</head>
<body>

    <section>
        <div class="contenedor col-12"> 
            <div class="row col-12 bg-info" style="background-image: url( '<?php echo $row['imagen'] ?>')">
                <h1 class="card-title"><?php echo $row['Nom_sitio'] ?></h1>
            </div>
        
        </div>

    </section>

            <div class="row text-center">
                    <svg id="pl-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path id="pl-img" d="M256,0C148.48,0,61,87.48,61,195c0,42.55,13.44,82.98,38.9,116.9l144.08,194.051c0.36,0.47,0.91,0.65,1.31,1.07 c7.2,7.71,17.59,5.77,22.72-1.07C309.5,450.591,385.55,347.2,414.79,308.2c0,0,0.01-0.03,0.02-0.05l0.18-0.24 C438.55,274.81,451,235.77,451,195C451,87.48,363.52,0,256,0z M256,300.2c-57.89,0-105.2-47.31-105.2-105.2S198.11,89.8,256,89.8 S361.2,137.11,361.2,195S313.89,300.2,256,300.2z"/></svg>
                    <h1 class="pl-txt"><?php echo $row['Nom_sitio'] ?></h1>
            </div>

        <div class="container col-12 mt-2">
            <div class="row col-12">
                <div class="col-12 col-md-6 order-2 order-md-1 mt-4 mt-md-0">
                <h1 class="sbtitle">Descripcion</h1>
                <p><?php echo $row['descripcion'] ?></p>

                </div>
                <div id="map" class="col-12 col-md-6 order-1 order-md-2">
                </div>

                <div class="col-12 my-3 order-3">
                    <form action="" method="POST" name="add_form">
                        <h1 class="sbtitle">Comentarios</h1>
                        <textarea name="comentario" id="comentario" cols="60" rows="7" class="form-control" placeholder="Coloque su comentario"></textarea>
                        <button type="button" id="com" class="btn btn-color">Enviar</button>
                    </form>
                </div>
            </div>

        </div>


    





    <script>
        function iniciarMap(){
            var coord = {lat:6.1515305 ,lng: -75.6155851};
            var map = new google.maps.Map(document.getElementById('map'),{
            zoom: 10,
            center: coord
            });
            var marker = new google.maps.Marker({
            position: coord,
            map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBICNPekXKgpgOgnzsKnyQdrYhj51YG0q0&callback=iniciarMap"></script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>