<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

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

    <div class="container">

        <div class="col-12">
            <div class="text-center">
                <h1>Nuevo proveedor</h1>
            </div>
        </div>

        <div>
            <form action="../../admin/proveedor/guardar_proveedor.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="">Nombre de la empresa</label>
                        <input type="text" class="form-control" placeholder="Ingrese el nombre" name="nombre">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="">RUT de la empresa</label>
                        <input type="text" class="form-control" placeholder="Ingrese los apellidos" name="rut">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12 col-md-4">
                        <label for="">Télefono</label>
                        <input type="text" class="form-control" placeholder="Ingrese el nombre" name="telefono">
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <label for="">Celular</label>
                        <input type="text" class="form-control" placeholder="Ingrese los apellidos" name="celular">
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" placeholder="Ingrese los apellidos" name="direccion">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="">Correo</label>
                        <input type="email" class="form-control" placeholder="Ingrese el correo electrónico" name="correo">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Ingrese una contraseña" name="contraseña">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="">Confirmar contraseña</label>
                        <input type="password" class="form-control" placeholder="Ingrese nuevamente la contraseña" name="contraseña2">
                    </div>
                </div>


                <div class="col-12 text-center">
                    <button class="btn btn-color">Registrarse</button>
                </div>

            </form>
        </div>

    </div>

    <footer class="footer mt-4 fixed-sm-bottom">
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