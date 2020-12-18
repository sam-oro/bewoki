<?php

include '../../admin/conexion/conexion.php';

$id=$_GET['id'];

session_start();
        if(!isset($_SESSION['rol'])){
            include '../../includes/header_inicio.php';
        }else{
            if($_SESSION['rol'] !=1 ){
                if($_SESSION['rol'] ==2 ){
                    include '../../includes/header_usuario.php';
                }else {
                    if($_SESSION['rol']==3){
                        include '../../includes/header_vendedor.php';
                    }else {
                        include '../../includes/header_inicio.php';
                    } 
                }
            }else {
                include '../../includes/header_admin.php';
            }            
        }


                            $baseDeDatos = obtenerBaseDeDatos();
                            $coleccion = $baseDeDatos->Eventos;
                            $cursor = $coleccion->find(

                                ["_id" => new MongoDB\BSON\ObjectId("$id")],

                            );

                            $con=0;

                            foreach ($cursor as $doc){
                                $row=json_decode(json_encode($doc),true);
                                $con++;
                                '<tr>';
                                '<td hidden>'. $row['_id']['$oid']. '</td>' ;
                                '<td>'. $row['Titulo']. '</td>' ;
                                '<td>'. $row['Descripcion']. '</td>' ;
                                '<td>'. $row['Ciudad']. '</td>' ;
                                '<td>'. $row['imagen']. '</td>' ;
                            }

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Turistico</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>

                <section>
                    <div class="contenedor col-12">
                        </div>
                            <div class="bg-info" style="background-image: url( <?php echo $row['imagen'] ?>)">
                        </div>
                    </div>
                </section>

    <section>
        <div class="contenedor col-12 mt-2 mb-4">
            <div class="pl row">
                    <svg id="pl-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path id="pl-img" d="M256,0C148.48,0,61,87.48,61,195c0,42.55,13.44,82.98,38.9,116.9l144.08,194.051c0.36,0.47,0.91,0.65,1.31,1.07 c7.2,7.71,17.59,5.77,22.72-1.07C309.5,450.591,385.55,347.2,414.79,308.2c0,0,0.01-0.03,0.02-0.05l0.18-0.24 C438.55,274.81,451,235.77,451,195C451,87.48,363.52,0,256,0z M256,300.2c-57.89,0-105.2-47.31-105.2-105.2S198.11,89.8,256,89.8 S361.2,137.11,361.2,195S313.89,300.2,256,300.2z"/></svg>
                    <h1 class="pl-txt"><?php echo $row['Titulo']  ?></h1>
            </div>
        </div>
    </section>

        <div class="container col-12 mt-2">                
                <div class="col-12 my-3">
                    <form action="" method="POST" name="add_form">

                        <div class="col-12 text-center my-3">
                            <h2>Descripcion</h2>
                            <p><?php echo $row['Descripcion'] ?></p>
                        </div>

                        <div class="col-12 px-md-5">
                            <h2 class="mt-5">Comentarios</h2>
                            <textarea name="comentario" id="comentario" cols="60" rows="7" class="form-control" placeholder="Coloque su comentario"></textarea>
                        </div>

                        <div class="col-12 text-center my-3">
                        <button type="button" id="com" class="btn btn-color">Enviar</button>
                        </div>
                    </form>
                </div>
        </div>

    <footer class="footer mt-4>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-center text-center contac">
                    <a href="../contacto/contactenos.php">
                    <h3 class="contach">Contáctenos</h3>
                    </a>
                </div>
                <div class="col-lg-6 my-3 my-lg-0 text-lg-center text-center">
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="redes btn btn-social mx-3" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-3 text-lg-left text-center copy">©Bewoki2020</div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous ">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous ">
    </script>
</body>

</html>