<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conocenos</title>
</head>

<!--importacion boostrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?php echo  $URL ?>css/estilos.css">
<link rel="stylesheet" href="<?php echo  $URL ?>css/estilos4.css">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="col-sm-3 text-center">
            <a class="navbar-brand" href="<?php echo  $URL ?>index.php">
                <img src="<?php echo  $URL ?>img/logo.png" alt="">
            </a>
        </div>

        <button class="navbar-toggler col-sm-3 ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav hola ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo  $URL ?>index.php">Inicio</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo  $URL ?>vistas/conocenos/conocenos.php">Conócenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo  $URL ?>vistas/informate/informate.php">Informate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Eventos-Tour</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo  $URL ?>vistas/aliados/aliados.php">Aliados </a> </li> <li class="nav-item">
                        <a class="nav-link" href="<?php echo  $URL ?>vistas/materialturistico/turistico.php">Material Turistico</a>
                </li>
                <div class="btn-group">
                    <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown"
                        data-display="static" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                        <button class="dropdown-item" type="button">Panel admin</button>
                        <div class="dropdown-divider"></div>
                        <a class="nav-link" href="<?php echo  $URL ?>vistas/usuario/cerrar_sesion/cerrar_sesion.php"><button class="dropdown-item" type="button">Cerrar sesión</button></a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>

</body>

</html>