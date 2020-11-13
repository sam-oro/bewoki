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
        <div class="row">
            <main class="col-12">
            <a class="navbar-brand" href="../../index.php">
                    <img src="../../img/logo.png" class="logo" alt="Logotipo">
                </a>
                <div class="container text-center mt-4">
                    <div>
                        <h1 class="inicio">Registrarse</h1>
                    </div>
                    <!-- Div Nav-->
                    <div>
                        <form action="guardar_usuario.php" name="add_form" method="post">
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
                                            >
                                        </div>
                                        <div class="col">
                                            <label>Apellido</label>
                                            <input
                                                type="text"
                                                name="apellido"
                                                class="form-control"
                                                placeholder="Ingrese los apellidos"
                                                id="apellido"                                      
                                            >
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
                                                id="correo">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <label>Contraseña</label>
                                            <input
                                                type="password"
                                                name="contrasena"
                                                class="form-control"
                                                placeholder="Ingrese una contraseña"
                                                id="con1"
                                                required="required">
                                        </div>
                                        <div class="col">
                                            <label>Confirmar Contraseña</label>
                                            <input
                                                type="password"
                                                name="contrasena2"
                                                class="form-control"
                                                placeholder="Confirme la contraseña"
                                                id="con2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">

                                            <label>Edad</label>
                                            <input
                                                type="number"
                                                name="edad"
                                                class="form-control"
                                                placeholder="Ingrese su edad">
                                        </div>
                                        <div class="col">
                                            <label>Direccion</label>
                                            <input
                                                type="text"
                                                name="direccion"
                                                class="form-control"
                                                placeholder="direccion de residencia">
                                        </div>
                                        <div class="col">
                                            <label>Telefono Celular</label>
                                            <input
                                                type="text"
                                                name="celular"
                                                class="form-control"
                                                placeholder="direccion de residencia">
                                        </div>
                                    </div><br>
                                    <span><a href="../../admin/proveedor/form_proveedor.php">¿Eres Un Proveedor? Da click! Aqui!</a></span><br>
                                
                                <button type="submit" class="btn btn-color">Registrarse</button>
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