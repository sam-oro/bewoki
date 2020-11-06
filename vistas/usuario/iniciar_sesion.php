<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>

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
    <main class="col-12">                
        <div class="contenedor col-12 text-center">
            <div class="row col-12">
                <a class="navbar-brand" href="../../index.php">
                    <img src="../../img/logo.png" class="logo" alt="Logotipo">
                </a>
                <div class="col-12">
                    <form action="config/login.php" method="POST" class="formulario">
                        <h1 class="inicio">Iniciar Sesión</h1>
                        <label for=""> Correo Electrónico</label>
                        <input type="text" class="form-control" name ="usuario" placeholder="Introduce el correo electrónico">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Introduce la contraseña">
                        <span><a href="recuperacion/recuperar_con.php">¿Olvidaste tu contraseña?</a></span>
                        <br>
                        <button type="submit" class="btn btn-color" id="ingresar">INGRESAR </button>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <footer class="footer mt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-lg-center text-center contac">
                    <a href="#"></a>
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