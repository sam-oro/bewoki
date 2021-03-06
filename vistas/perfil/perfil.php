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
    <title>Mi Perfil</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="../../css/estilos3.css">

</head>
    <body>
        <div class="row">
            <main class="col-12">
                <div class="container text-center mt-4">
                    <div>
                        <h1 class="inicio">Mi Perfil</h1>
                    </div>
                    <!-- Div Nav-->
                    <div>
                        <form action="#" name="add_form" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <label>Nombre</label>
                                        <input
                                            type="text"
                                            name="nombre"
                                            class="form-control"
                                            placeholder="Ingrese el nombre"
                                            id="nombre"
                                            value="Carlitos"
                                            disabled>
                                    </div>
                                    <div class="col">
                                        <label>Apellido</label>
                                        <input
                                            type="text"
                                            name="apellidos"
                                            class="form-control"
                                            placeholder="Ingrese los apellidos"
                                            id="apellido"
                                            value="Jimenez"
                                            disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Correo</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="correo"
                                            placeholder="Ingrese el correo"
                                            id="correo"
                                            value="carmenes@gmail.com"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- Div Form -->
                </div>
                    <!-- Div Conetenedor -->
            </main>
        </div>

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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous ">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous ">
    </script>

    </body>
</html>