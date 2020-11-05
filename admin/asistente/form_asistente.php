<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asistente</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css">


    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


    
</head>
    <body>

    <div class="d-flex" id="content-wrapper">
        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">Templune</h4>
            </div>
            <div class="menu">
                <a href="form_asistente" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>asistente</a>
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>Usuarios</a>
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>Estadísticas</a>
                <a href="#" class="d-block text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i>Perfil</a>
                <a href="#" class="d-block text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>Configuración</a>
            </div>
        </div>

    <div class="container col-8">
        <div class="row col-8">
            <form action="guardar_asistente.php" method="POST" class="col-8">
                <div class="form-group">
                    <label>identificacion</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="form-group">
                    <label>contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>movil</label>
                    <input type="text" class="form-control" name="celular">
                </div>
                <div class="form-group">
                    <label>correo</label>
                    <input type="email" class="form-control" name="correo">
                </div>
                <button type="submit" class="btn btn-primary">enviar</button>
            </form>
        </div>
    </div>


    
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    </body>
        
</html>