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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conocenos</title>
</head>

<!--importacion boostrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../../css/estilos.css">
<link rel="stylesheet" href="../../css/estilos4.css">

<body>

    <section>
        <div class="container">
            <div class="row conocenos m-0">
                <div class="row col-12">
                    <div class="col-md-6 mb-md-5 my-lg-5 text-center">
                        <img src="../../img/iconos-01.svg" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h3 class="mb-md-5 my-lg-3 text-center">¿Quienes Somos?</h3>
                        <p class="text-justify">Somos la comunidad digital para descubrir, emocionar y compartir experiencias y contenido saludable, seguro y sostenible en el territorio.</p>
                        <h3 class="mb-md-5 my-lg-3 text-center">¿Qué hacemos?</h3>
                        <p class="text-justify">Visibilizamos sobre el territorio y conectamos la oferta y demanda de contenido y experiencias turísticas, culturales, creativas, salud y bienestar.</p>
                        <h3 class="mb-md-5 my-lg-3 text-center">¿Cómo lo hacemos?</h3>
                        <p class="text-justify">A través de una plataforma tecnológica innovadora eficiente e incluyente que permite conformar una comunidad digital colaborativa.</p>
                        <h3 class="mb-md-5 my-lg-3 text-center">¿Para quién lo hacemos?</h3>
                        <p class="text-justify">Para todos los usuarios y actores de los ecosistemas turístico, cultural, creativo, salud y bienestar.</p>
                        <h3 class="mb-md-5 my-lg-3 text-center">¿Qué beneficios obtiene el usuario, cliente o consumidor?</h3>
                        <p class="text-justify">1. Seguridad y eficiencia en el descubrir, disfrutar y compartir experiencias y contenidos en el territorio.</p>
                        <p class="text-justify">2. Salud y bienestar físico, emocional y mental.</p>
                        <p class="text-justify">3. Consciencia sostenible mediante una conexión social con el patrimonio natural y cultural.</p>
                        <p class="text-justify">4. Posibilidad de generar y aumentar ingresos, gracias al modelo de recompensas, marketing de afiliados y conversión de leads.</p>
                    </div>
                </div>

                <div class="row col-12">
                    <div class="col-sm-12 col-md-6 col-sm-12 mb-md-5 my-lg-5 text-center">
                        <img src="../../img/iconos-02.svg" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-sm-12 mision">
                        <h3 class="mb-md-5 my-lg-3 text-center">Misión</h3>
                        <p class="text-justify">Fomentar con innovación tecnológica y creando comunidad, la industria turística, cultural y creativa permitiendo disfrutar segura, sostenible y saludablemente experiencias y contenidos que promuevan la preservación del patrimonio
                            natural y cultural en el territorio, con un equipo comprometido con los objetivos y expectativas de todos los clientes internos y externos. Generamos visibilidad, interacción y conexión entre los usuarios del territorio incentivando
                            la generación de experiencias y contenidos a nivel global.</p>
                    </div>
                </div>

                <div class="row col-12">
                    <div class="col-sm-12 col-md-6 mb-md-5 my-lg-5 text-center">
                        <img src="../../img/iconos-03.svg" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 mt-5">
                        <h3 class="mb-md-5 my-lg-3 text-center imgpadding">Visión</h3>
                        <p class="text-justify">Bewoki en el año 2025, se consolidará como organización BIC social y económicamente, certificada en sus procesos y reconocida como una plataforma y comunidad digital de experiencias y contenidos innovadores, seguros y sostenibles
                            que fomenten la preservación del patrimonio natural y cultural en el territorio.</p>
                    </div>
                </div>

                <div class="row col-12">
                    <div class="col-sm-12 col-md-6 mb-md-5 my-lg-5 text-center imgpadding2">
                        <img src="../../img/valores.svg" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 mt-5" >
                        <h3 class="mb-md-5 mt-lg-3 text-center imgpadding3">Valores</h3>
                        <p class="text-justify">Integridad: Estamos comprometidos a hacer lo que es
                            correcto, honesto y justo.
                            • Calidad: Nos dedicamos a producir consistentemente
                            resultados que cumplan y excedan las expectativas de
                            nuestros clientes.

                            • Respeto: Valoramos las marcas y sus productos, haciendo
                            alianzas estratégicas con diferentes empresas del medio.
                            • Competitividad e innovación: constantemente ideamos
                            proyectos para mejorar los procesos, producción y la
                            calidad de los bienes o los servicios.

                            • Goce y Disfrute: Disfrutamos y nos gozamos cada uno de
                            los proyectos que hacemos. Somos una empresa feliz</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <footer class="footer mt-4">
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>