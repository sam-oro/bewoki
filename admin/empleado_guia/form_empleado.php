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

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
                <a href="form_empleado.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i><h5 class="m-1 navbar-enlaces">Empleado guia</h5></a>
                <a href="../organizador_tour/form_organizador.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i><h5 class="m-1 navbar-enlaces">Organizador</h5></a>
                <a href="../proveedor/form_proveedor.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i><h5 class="m-1 navbar-enlaces">Proveedor</h5></a>
                <a href="../sitio/form_sitio.php" class="d-flex text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    <h5 class="m-1 navbar-enlaces">Sitio Turistico</h5>
                </a>
                <a href=""></a>

            </div>
        </div>
        <div class="container formularios col-9">
            <form action="guardar_empleado.php" method="POST" class="col-12" name="add_form"> 
                <h3>Empleado guía</h3>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" name="apellido" id="apellido">
                </div>
                <div class="form-group">
                    <label>Identificación</label>
                    <input type="text" class="form-control" name="id" id="id">
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="form-group">
                    <label>Celular</label>
                    <input type="text" class="form-control" name="celular" id="celular">
                </div>
                <div class="form-group">
                    <label>Contacto</label>
                    <input type="text" class="form-control" name="contacto" id="contacto">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" name="correo" id="correo">
                </div>
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div>
                <div class="form-group">
                    <label>Profesión</label>
                    <input type="text" class="form-control" name="profesion" id="profesion">
                </div>
                <div class="form-group">
                    <label>Experiencia</label>
                    <input type="text" class="form-control" name="experiencia" id="experiencia">
                </div>
                <div class="form-group">
                    <label>Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad">
                </div>
                <div class="form-group">
                    <label>Sexo</label>
                    <select type="text" class="form-control" name="sexo" id=sexo>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" id="ciudad">
                </div>
                <div class="text-center">
                <button type="button" class="btn btn-color">Enviar</button>
                </div>
            </form>

            <div class="table-over">
            <table class="table mt-5">
                <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Cedula</th>
                    <th>telefono</th>
                    <th>celular</th>
                    <th>Contacto</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Profesion</th>
                    <th>Experiencia</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Ciudad</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $baseDeDatos = obtenerBaseDeDatos();
                    $coleccion = $baseDeDatos->Empleado_Guia;
                    $cursor = $coleccion->find();

                    $con=0;

                    foreach ($cursor as $doc){
                        $row=json_decode(json_encode($doc),true);
                        $con++;
                        echo '<tr>';
                        echo '<td>'. $row['Nom_empleado']. '</td>' ;
                        echo '<td>'. $row['Ape_empleado']. '</td>' ;
                        echo '<td>'. $row['Id_empleado']. '</td>' ;
                        echo '<td>'. $row['Tel_empleado']. '</td>' ;
                        echo '<td>'. $row['Mov_empleado']. '</td>' ;
                        echo '<td>'. $row['Conta_empleado']. '</td>' ;
                        echo '<td>'. $row['Corr_empleado']. '</td>' ;
                        echo '<td>'. $row['Dire_empleado']. '</td>' ;
                        echo '<td>'. $row['Profe_empleado']. '</td>' ;
                        echo '<td>'. $row['Expe_empleado']. '</td>' ;
                        echo '<td>'. $row['Edad_empleado']. '</td>' ;
                        echo '<td>'. $row['Sexo_empleado']. '</td>' ;
                        echo '<td>'. $row['Ciu_empleado']. '</td>' ;
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
                                        <form action="actualizar_empleado.php" method="POST">
                                            <input type="text" name="id" value=<?php echo $row['_id']['$oid']?> hidden>
                                            <br>
                                            <label>Nombre</label>
                                            <input class="form-control" type="text" name="nombre" value=<?php echo $row['Nom_empleado'] ?>>
                                            <br>
                                            <label>Apellido</label>
                                            <input class="form-control" type="text" name="apellido" value=<?php echo $row['Ape_empleado'] ?>>
                                            <br>
                                            <label>Identificación</label>
                                            <input class="form-control" type="text" name="doc" value=<?php echo $row['Id_empleado']?> disabled>
                                            <br>
                                            <label>Teléfono</label>
                                            <input class="form-control" type="text" name="tel" value=<?php echo $row['Tel_empleado'] ?>>
                                            <br>  
                                            <label>Celular</label>
                                            <input class="form-control" type="text" name="cel" value=<?php echo $row['Mov_empleado'] ?>>
                                            <br>
                                            <label>Contacto</label>
                                            <input class="form-control" type="text" name="cont" value=<?php echo $row['Conta_empleado'] ?>>
                                            <br>
                                            <label>Correo</label>
                                            <input class="form-control" type="email" name="correo" value=<?php echo $row['Corr_empleado'] ?>>
                                            <br>
                                            <label>Dirección</label>
                                            <input class="form-control" type="text" name="dir" value=<?php echo $row['Dire_empleado'] ?>>
                                            <br>
                                            <label>Profesión</label>
                                            <input class="form-control" type="text" name="prof" value=<?php echo $row['Profe_empleado'] ?>>
                                            <br>
                                            <label>Experiencia</label>
                                            <input class="form-control" type="text" name="exp" value=<?php echo $row['Expe_empleado'] ?>>
                                            <br>
                                            <label>Edad</label>
                                            <input class="form-control" type="number" name="edad" value=<?php echo $row['Edad_empleado'] ?>>
                                            <br>
                                            <label>Sexo</label>
                                            <select class="form-control" name="sexo">
                                                <?php
                                                if ($row['Sexo_empleado']=="Hombre"){
                                                    ?>
                                                    <option value="Hombre" selected>Hombre</option>
                                                    <option value="Mujero">Mujer</option>
                                                    <option value="Otro">Otro</option>
                                                    <?php
                                                }elseif ($row['Sexo_empleado']=="Mujer"){
                                                    ?>
                                                    <option value="Hombre">Hombre</option>
                                                    <option value="Mujero" selected>Mujer</option>
                                                    <option value="Otro">Otro</option>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <option value="Hombre">Hombre</option>
                                                    <option value="Mujero">Mujer</option>
                                                    <option value="Otro" selected>Otro</option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <br>
                                            <label>Ciudad</label>
                                            <input class="form-control" type="text" name="ciudad" value=<?php echo $row['Ciu_empleado'] ?>>
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