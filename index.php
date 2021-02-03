<?php

include 'admin/conexion/conexion.php';

session_start();
        if(!isset($_SESSION['rol'])){
            include 'includes/header_inicio.php';
        }else{
            if($_SESSION['rol'] !=1 ){
                if($_SESSION['rol'] ==2 ){
                    include 'includes/header_usuario.php';
                }else {
                    if($_SESSION['rol']==3){
                        include 'includes/header_vendedor.php';
                    }else {
                        include 'includes/header_inicio.php';
                    } 
                }
            }else {
                include 'includes/header_admin.php';
            }            
        }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewoki</title>
</head>

<!--importacion boostrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/estilos2.css">

<body>
    <section class="sldier">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 sli-img" src="img/slid-01.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sli-img" src="img/slid-02.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 sli-img" src="img/slid-03.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class="container">
        <hr>
        <section class="container">
            <div class="video_idx">
                
                <?php
                //include "admin/conexion/conexion.php";

                $baseDeDatos = obtenerBaseDeDatos();
                $coleccion = $baseDeDatos->video_index;
                $cursor = $coleccion->find(); // Realiza la busueda del video

                foreach ( $cursor as $id => $valor )
                {
                    $row=json_decode(json_encode($valor),true);
                    echo('<iframe class="video" src="'.$row['Url'].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
                }
                ?>


                <?php

                if (isset($_SESSION['rol'])) {
                    if($_SESSION['rol']==1){
                        echo ' <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Cambiar Video
                        </button>';
                        
                    }
                }
                ?>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cambiar Video</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form action="admin/video_idx/actu_video.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" type="text" name="nombre">
                                        </div>
                                        <fieldset>
                                        <legend>vídeo</legend>
                                        <p>Si inserta el vídeo con un URL no es necesario que seleccione un vídeo desde su dispositivo y viceversa; Si rellena el campo URL y selecciona un archivo desde su dispositivo, se dará prioridad al URL que ingreso primero</p>
                                        <div class="form-group">
                                            <label>URL Vídeo</label>
                                            <input class="form-control" type="text" name="url">
                                        </div>
                                        <div class="form-group">
                                            <label>Seleccionar Vídeo</label>
                                            <input class="form-control" type="file" name="video">
                                        </div>
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <hr>
        <section class="container">
            <div class="que_es">
                <div class="titulos">
                    <h1>¿Qué es Bewoki?</h1>
                </div>
                <div class="contenido_que">
                    <div class="row fila_cont">
                        <div class="col-md-6 col-sm-12">
                            <h3 class="titulo">¿Quiénes somos?</h3>
                            <p class="texto">Somos la comunidad digital para descubrir, emocionar y compartir experiencias y contenido saludable, seguro y sostenible en el territorio.</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h3 class="titulo">¿Qué hacemos?</h3>
                            <p class="texto">Visibilizamos sobre el territorio y conectamos la oferta y demanda de contenido y experiencias turísticas, culturales, creativas, salud y bienestar.</p>
                        </div>
                    </div>
                    <div class="row fila_cont">
                        <div class="col-md-6 col-sm-12">
                            <h3 class="titulo">¿Cómo lo hacemos?</h3>
                            <p class="texto">A través de una plataforma tecnológica innovadora eficiente e incluyente que permite conformar una comunidad digital colaborativa.</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h3 class="titulo">¿Para quién lo hacemos?</h3>
                            <p class="texto">A través de una plataforma tecnológica innovadora eficiente e incluyente que permite conformar una comunidad digital colaborativa.</p>
                        </div>
                    </div>
                    <div class="row fila_cont">
                        <h3 class="titulo">¿Qué beneficios obtiene el usuario, cliente o consumidor?</h3>
                        <p class="texto">1. Seguridad y eficiencia en el descubrir, disfrutar y compartir experiencias y contenidos en el territorio.</p>
                        <p class="texto">2. Salud y bienestar físico, emocional y mental.</p>
                        <p class="texto">3. Consciencia sostenible mediante una conexión social con el patrimonio natural y cultural.</p>
                        <p class="texto">4. Posibilidad de generar y aumentar ingresos, gracias al modelo de recompensas, marketing de afiliados y conversión de leads.</p>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="container">
            <div class="valores">
                <div class="titulos">
                    <h1>Nuestros Valores</h1>
                </div>
                <div class="contenido_valores">
                    <div class="row fila_cont">
                        <div class="col-md-4 col-sm-12 img">
                            <img class="img_valores" src="img/iconos-01.svg" alt="">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p class="texto"><b>Integridad:</b> Estamos comprometidos a hacer lo que es correcto, honesto y justo.</p>
                            <p class="texto"><b>Calidad:</b> Nos dedicamos a producir consistentemente resultados que cumplan y excedan las expectativas de nuestros clientes.</p>
                            <p class="texto"><b>Respeto:</b> Valoramos las marcas y sus productos, haciendo alianzas estratégicas con diferentes empresas del medio.</p>
                            <p class="texto"><b>Competitividad e innovación:</b> Constantemente ideamos proyectos para mejorar los procesos, producción y la calidad de los bienes o los servicios.</p>
                            <p class="texto"><b>Goce y disfrute:</b> Disfrutamos y nos gozamos cada uno de los proyectos que hacemos. Somos una empresa feliz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="container">
            <div class="tarjetas">
                <div class="row fila_cont">
                    <div class="col-md-3 col-sm-12 text-center">
                        <a style="text-decoration: none;" href="index.php">
                            <div class="vinculo">
                                <img class="img_valores" src="img/index-icon-01.svg" alt="">
                                <h3 class="titulo">Únete a la comunidad</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center">
                        <a style="text-decoration: none;" href="vistas/contacto/contactenos.php">
                            <div class="vinculo">
                                <img class="img_valores" src="img/index-icon-02.svg" alt="">
                                <h3 class="titulo">Ayúdanos a mejorar</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center">
                        <a style="text-decoration: none;" href="vistas/eventos/eventos_tour.php">
                            <div class="vinculo">
                                <img class="img_valores" src="img/index-icon-03.svg" alt="">
                                <h3 class="titulo">Conoce Colombia</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center">
                        <a style="text-decoration: none;" href="vistas/contacto/contactenos.php">
                            <div class="vinculo">
                                <img class="img_valores" src="img/index-icon-04.svg" alt="">
                                <h3 class="titulo">Contáctenos</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer mt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-center text-center contac">
                    <a href="vistas/contacto/contactenos.php">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>