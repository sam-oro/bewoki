<?php

include '../../admin/conexion/conexion.php';

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

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>

        <section class="bg-eventos">
            <div class="text-center tit-event">
            <h1>Eventos</h1>
            </div>
        </section>

        <div class="container mb-5 tabla" style="overflow: scroll; height: 70vh;">   
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Ciudad</th>
                            <th></th>
                        <tr>
                    </thead>
                    <tbody>
                        <?php
                            $baseDeDatos = obtenerBaseDeDatos();
                            $coleccion = $baseDeDatos->Eventos;
                            $cursor = $coleccion->find();

                            $con=0;

                            foreach ($cursor as $doc){
                                $row=json_decode(json_encode($doc),true);
                                $con++;
                                echo '<tr>';
                                echo '<td hidden>'. $row['_id']['$oid']. '</td>' ;
                                echo '<td>'. $row['Titulo']. '</td>' ;
                                echo '<td>'. $row['Descripcion']. '</td>' ;
                                echo '<td>'. $row['Ciudad']. '</td>' ;
                                ?>
                                <td><a href="tour_individual.php?id=<?php echo $row['_id']['$oid']?>"><button class="btn btn-color2">Ver</button></a></td>
                                <?php
                                echo '</tr>';
                                ?>
                            
                                <?php
                                }
                                ?> 
                    </tbody> 
                </table>
        </div>








    

    <footer class="footer mt-5 fixed-md-bottom">
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