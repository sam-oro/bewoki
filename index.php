<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<!--importacion boostrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/estilos.css">

<body>
    <section class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <div class="col-sm-3 text-center">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="">
                </a>
            </div>

            <button class="navbar-toggler col-sm-3 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav hola ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Inicio</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vistas/conocenos.php">Conócenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eventos-Tour</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aliados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Material Turistico</a>
                    </li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                            Perfil
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            <button class="dropdown-item" type="button">Mi Perfil</button>
                            <button class="dropdown-item" type="button">Configuración</button>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" type="button">Cerrar Sección</button>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </section>

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
    <hr>
    <section class="video_index">
        <div class="video_idx">
            <?php
            include "admin/conexion/conexion.php";

            $baseDeDatos = obtenerBaseDeDatos();
            $coleccion = $baseDeDatos->video_index;
            $cursor = $coleccion->find(); // Sin criterio de búsqueda

            foreach ( $cursor as $id => $valor )
            {
                $row=json_decode(json_encode($valor),true);
                echo('<iframe class="video" src="'.$row['Url'].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            }
            ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>