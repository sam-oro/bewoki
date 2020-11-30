<?php
    include "../conexion/conexion.php";
    session_start();
    if(!isset($_SESSION['rol'])){
        header('location: ../../vistas/usuario/iniciar_sesion.php');
    }else{
        if($_SESSION['rol'] !=1 ){
            header('location: ../../vistas/usuario/iniciar_sesion.php');
        }else{
            //include '../../includes/header_admin.php';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
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

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Sitio</title>
</head>
<body>

        <div class="contenedor col-12">
            <div class="row col-12">
                <div class="col-3 col-md-3 bg-dark" style="min-height: 100vh;">
                    <div class="col-12 d-none d-lg-block text-center mb-5">
                        <a href="../../index.php"><img src="../../img/isologo-blan.png" class="mt-3" style="width: 60%;"></a>
                    </div>
            <div class="menu col-12">
                <a href="../asistente/form_asistente.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i><h5 class="m-1 navbar-enlaces">Asistente</h5></a>
                <a href="../empleado_guia/form_empleado.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i><h5 class="m-1 navbar-enlaces">Empleado guia</h5></a>
                <a href="../organizador_tour/form_organizador.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i><h5 class="m-1 navbar-enlaces">Organizador</h5></a>
                <a href="../evento/form_evento.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i><h5 class="m-1 navbar-enlaces">Eventos</h5></a>
                <a href="form_sitio.php" class="d-flex text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    <h5 class="m-1 navbar-enlaces">Sitio Turistico</h5>
                </a>
                <a href=""></a>

            </div>
        </div>
        <div class="container formularios col-9">
            <h3>Sitio Turístico</h3>
        <form action="guardar_sitio.php" method="POST" class="col-12" name="add_form">
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
        </div>
        <div class="form-group">
            <label>Teléfono:</label>
            <input type="text" class="form-control" name="telefono" id="telefono">
        </div>
        <div class="form-group">
            <label>Correo:</label>
            <input type="email" class="form-control" name="correo" id="correo">
        </div>
        <div class="form-group">
            <label>Descripción del sitio:</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="7" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <h3>Ubicación</h3>
            <label>Latitud:</label>
            <input type="text" class="form-control" name="latitud" id="latitud">
            <label>Longitud:</label>
            <input type="text" class="form-control" name="longitud" id="longitud">
            <label>Imagen:</label>
            <input class="form-control" type="text" name="imagen" id="imagen">
        </div>
        <div class="text-center">
        <button type="button" class="btn btn-color">Enviar</button>
        </div>
        </form>
        <div class="table-over">
        <table class="table mt-5" >
            <thead>
                <tr>
                <th>Nombre del sitio</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>descripcion</th>
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
                    echo '<td>'. $row['descripcion']. '</td>' ;
                    //echo('<img class="img" src="'.$row['imagen'].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></img>');
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
                                        <label>Nombre:</label>
                                        <input class="form-control" type="text" name="nombre" value="<?php echo $row['Nom_sitio'] ?>">
                                        <br>
                                        <label>Teléfono:</label>
                                        <input class="form-control" type="text" name="tel" value="<?php echo $row['Tel_sitio'] ?>">
                                        <br>
                                        <label>Correo:</label>
                                        <input class="form-control" type="text" name="correo" value="<?php echo $row['Corr_sitio']?>">
                                        <br>
                                        <label>Descripción del sitio:</label>
                                        <textarea type="text" name="descripcion" id="descripcion" cols="30" rows="7" class="form-control"><?php echo $row['descripcion']; ?></textarea>
                                        <br>
                                        <label>Latitud:</label>
                                        <input class="form-control" type="text" name="lat" value=<?php echo $row['Lat_sitio'] ?>>
                                        <br>  
                                        <label>Longitud:</label>
                                        <input class="form-control" type="text" name="long" value=<?php echo $row['Lon_sitio'] ?>>
                                        <br>
                                        <label>Imagen:</label>
                                        <input class="form-control" type="text" name="imagen" value=<?php echo $row ['imagen'] ?>>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>     
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
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="validaciones.js"></script>

    <?php
        if(isset($_GET['msg'])){
            if($_GET['msg']==1){
        ?>
    

        <script>
            swal.fire({
                icon: 'success',
                text: 'Ingresado con exito',
                });
        </script>

        <?php  }else{
            if($_GET['msg']==2){
            ?> 
        <script>
            swal.fire({
                icon: 'success',
                text: 'Actualizado con exito',
                });
        </script> 
            <?php
            } 
        }
        } ?>
</body>  