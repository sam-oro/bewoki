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
<!doctype html>
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

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <title>Asistente</title>
</head>

<body>

        <div class="contenedor col-12">
            <div class="row col-12">
                <div class="col-3 col-md-3 bg-dark" style="min-height: 100vh;">
                    <div class="col-12 d-none d-lg-block text-center mb-5">
                    <a href="../../index.php"><img src="../../img/isologo-blan.png" class="mt-3" style="width: 60%;"></a>
                    </div>
            <div class="menu col-12">
                <a href="form_asistente.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2" title="Asistente"></i><h5 class="m-1 navbar-enlaces">Asistente</h5></a>
                <a href="../empleado_guia/form_empleado.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-people lead mr-2" title="Empleado guía"></i><h5 class="m-1 navbar-enlaces">Empleado guía</h5></a>
                <a href="../organizador_tour/form_organizador.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2" title="Organizador"></i><h5 class="m-1 navbar-enlaces">Organizador</h5></a>
                <a href="../proveedor/form_proveedor.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-person lead mr-2" title="Proveedor"></i><h5 class="m-1 navbar-enlaces">Proveedor</h5></a>
                <a href="../sitio/form_sitio.php" class="d-flex text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2" title="Sitio Turistico"></i><h5 class="m-1 navbar-enlaces">Sitio Turistico</h5></a>
                
            </div>
        </div>
        <div class="container formularios col-9">
            <form action="guardar_asistente.php" method="POST" name="add_form" class="col-12">
                <div>
                    <h3>Asistente</h3>
                </div>
                <div class="form-group">
                    <label>Identificación</label>
                    <input type="text" class="form-control" name="id" id="id">
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label>Celular</label>
                    <input type="text" class="form-control" name="celular" id="celular">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" name="correo" id="correo">
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-color text-center">Enviar</button>
                </div>

            </form>


            <div class="table-over">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>documento</th>
                        <th>Nombre</th>
                        <th>movil</th>
                        <th>correo</th>
                        <th></th>
                    <tr>
                </thead>
                <tbody>
                    <?php
                        $baseDeDatos = obtenerBaseDeDatos();
                        $coleccion = $baseDeDatos->Asistente;
                        $cursor = $coleccion->find();

                        $con=0;

                        foreach ($cursor as $doc){
                            $row=json_decode(json_encode($doc),true);
                            $con++;
                            echo '<tr>';
                            echo '<td hidden>'. $row['_id']['$oid']. '</td>' ;
                            echo '<td>'. $row['documento']. '</td>' ;
                            echo '<td>'. $row['Nombre']. '</td>' ;
                            echo '<td>'. $row['movil']. '</td>' ;
                            echo '<td>'. $row['correo']. '</td>' ;
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
                                            <form action="actualizar_asistente.php" method="POST">
                                                <input type="text" name="id" value=<?php echo $row['_id']['$oid']?> hidden>
                                                
                                                <div class="form-group">
                                                    <label class="col-form-label">Documento: </label>
                                                    <input class="form-control" type="text" name="documento" value=<?php echo $row['documento']?> disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label">Nombre: </label>
                                                    <input class="form-control" type="text" name="nombre" value=<?php echo $row['Nombre'] ?>>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label">Móvil: </label>
                                                    <input class="form-control" type="text" name="movil" value=<?php echo $row['movil'] ?>>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-form-label">Correo: </label>
                                                    <input class="form-control" type="text" name="correo" value=<?php echo $row['correo'] ?>>
                                                </div>

                                                <div class="form-group col-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
                                                </div>
                                                    
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

</html>