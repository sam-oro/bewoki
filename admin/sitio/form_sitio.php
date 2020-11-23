<?php
    include "../conexion/conexion.php";
    session_start();
    if(!isset($_SESSION['rol'])){
        header('location: ../../vistas/usuario/iniciar_sesion.php');
    }else{
        if($_SESSION['rol'] !=1 ){
            header('location: ../../vistas/usuario/iniciar_sesion.php');
        }else{
            include '../../includes/header_admin.php';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="../../css/estilos.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>

    <div class="d-flex" id="conten-prin">
        <!-- Sidebar -->
        <div id="sidebar-container" class="col-3">
            <div class="col-3 d-none d-lg-block">
                <img src="../../img/isologo-blan.png" alt="">
            </div>
            <div class="menu">
                <a href="../asistente/form_asistente.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i><h5 class="m-1 navbar-enlaces">Asistente</h5></a>
                <a href="../empleado_guia/form_empleado.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i><h5 class="m-1 navbar-enlaces">Empleado guia</h5></a>
                <a href="../organizador_tour/form_organizador.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i><h5 class="m-1 navbar-enlaces">organizador</h5></a>
                <a href="../proveedor/form_proveedor.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i><h5 class="m-1 navbar-enlaces">proveedor</h5></a>
                <a href="form_sitio.php" class="d-flex text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    <h5 class="m-1 navbar-enlaces">Sitio Turistico</h5>
                </a>
                <a href=""></a>

            </div>
        </div>
        <div class="container formularios col-9">
            <h3>Sitio Turístico</h3>
        <form action="guardar_sitio.php" method="POST" class="col-12">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label>Correo</label>
            <input type="email" class="form-control" name="correo">
        </div>
        <div class="form-group">
            <h3>Úbicacion</h3>
            <label>Latitud:</label>
            <input type="text" class="form-control" name="latitud">
            <label>Longitud:</label>
            <input type="text" class="form-control" name="longitud">
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-color">Enviar</button>
        </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                <th>Nombre del sitio</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>latitud</th>
                <th>Longitud</th>
                <th></th>
            </thead>

            <tbody>
            </tr>
            <?php
                $baseDeDatos = obtenerBaseDeDatos();
                $coleccion = $baseDeDatos->Sitio_Turistico;
                $cursor = $coleccion->find();

                $con=0;

                foreach ($cursor as $doc){
                    $row=json_decode(json_encode($doc),true);
                    $con++;
                    echo '<tr>';
                    echo '<td>'. $row['Nom_sitio']. '</td>' ;
                    echo '<td>'. $row['Tel_sitio']. '</td>' ;
                    echo '<td>'. $row['Corr_sitio']. '</td>' ;
                    echo '<td>'. $row['Lat_sitio']. '</td>' ;
                    echo '<td>'. $row['Lon_sitio']. '</td>' ;
                    ?>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $con; ?>" id="ingresar">Editar</button></td>
                    <?php
                    echo '</tr>';
                    ?>
                    <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $con; ?>">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Actualizar Asistente</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="actualizar_sitio.php" method="POST">
                                        <input type="text" name="id" value=<?php echo $row['_id']['$oid']?> hidden>
                                        <br>
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" value="<?php echo $row['Nom_sitio'] ?>">
                                        <br>
                                        <label>Telefono</label>
                                        <input type="text" name="tel" value="<?php echo $row['Tel_sitio'] ?>">
                                        <br>
                                        <label>Correo</label>
                                        <input type="text" name="correo" value="<?php echo $row['Corr_sitio']?>">
                                        <br>
                                        <label>Latitud</label>
                                        <input type="text" name="lat" value=<?php echo $row['Lat_sitio'] ?>>
                                        <br>  
                                        <label>Longitud</label>
                                        <input type="text" name="long" value=<?php echo $row['Lon_sitio'] ?>>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>     
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?> 
                </tbody>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
</body>  