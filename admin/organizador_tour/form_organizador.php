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
    <!-- <div class="container">
        <form action="guardar_organizador.php" method="POST">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="apellido">
        </div>
        <div class="form-group">
            <label>Identificacion</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" name="usuario">
        </div>
        <div class="form-group">
            <label>Celular</label>
            <input type="text" class="form-control" name="celular">
        </div>
        <div class="form-group">
            <label>Telefono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label>Correo</label>
            <input type="email" class="form-control" name="correo">
        </div>
        <div class="form-group">
            <label>Direccion</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="form-group">
            <label>Profesion</label>
            <input type="text" class="form-control" name="profesion">
        </div>
        <div class="form-group">
            <label>Experiencia</label>
            <input type="text" class="form-control" name="experiencia">
        </div>
        <div class="form-group">
            <label>Edad</label>
            <input type="number" class="form-control" name="edad">
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <select type="text" class="form-control" name="sexo">
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">enviar</button>
        </form>
    </div> -->

    <div class="d-flex" id="conten-prin">
        <!-- Sidebar -->
        <div id="sidebar-container" class="col-3">
            <div class="col-3 d-none d-lg-block">
                <img src="../../img/isologo-blan.png" alt="">
            </div>
            <div class="menu">
                <a href="../asistente/form_asistente.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i><h5 class="m-1 navbar-enlaces">Asistente</h5></a>
                <a href="../empleado_guia/form_empleado.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i><h5 class="m-1 navbar-enlaces">Empleado guia</h5></a>
                <a href="form_organizador.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i><h5 class="m-1 navbar-enlaces">organizador</h5></a>
                <a href="../proveedor/form_proveedor.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i><h5 class="m-1 navbar-enlaces">proveedor</h5></a>
                <a href="../sitio/form_sitio.php" class="d-flex text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    <h5 class="m-1 navbar-enlaces">Sitio Turistico</h5>
                </a>
                <a href=""></a>

            </div>
        </div>
        <div class="container formularios col-9">
            <h3>Organizador del Tour</h3>
        <form action="guardar_organizador.php" method="POST" class="col-12">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="apellido">
        </div>
        <div class="form-group">
            <label>Identificación</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" name="usuario">
        </div>
        <div class="form-group">
            <label>Celular</label>
            <input type="text" class="form-control" name="celular">
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
            <label>Dirección</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="form-group">
            <label>Profesión</label>
            <input type="text" class="form-control" name="profesion">
        </div>
        <div class="form-group">
            <label>Experiencia</label>
            <input type="text" class="form-control" name="experiencia">
        </div>
        <div class="form-group">
            <label>Edad</label>
            <input type="number" class="form-control" name="edad">
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <select type="text" class="form-control" name="sexo">
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-color">Enviar</button>
        </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Usuario</th>
                <th>celular</th>
                <th>telefono</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Profesion</th>
                <th>Experiencia</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th></th>
            </thead>

            <tbody>
                </tr>
            <?php
                $baseDeDatos = obtenerBaseDeDatos();
                $coleccion = $baseDeDatos->Organizador_Tour;
                $cursor = $coleccion->find();

                $con=0;

                foreach ($cursor as $doc){
                    $row=json_decode(json_encode($doc),true);
                    $con++;
                    echo '<tr>';
                    echo '<td hidden>'. $row['_id']['$oid']. '</td>' ;
                    echo '<td>'. $row['Nom_orga']. '</td>' ;
                    echo '<td>'. $row['Ape_orga']. '</td>' ;
                    echo '<td>'. $row['Id_orga']. '</td>' ;
                    echo '<td>'. $row['Usuario_orga']. '</td>' ;
                    echo '<td>'. $row['Mov_orga']. '</td>' ;
                    echo '<td>'. $row['Tel_orga']. '</td>' ;
                    echo '<td>'. $row['Corr_orga']. '</td>' ;
                    echo '<td>'. $row['Dire_orga']. '</td>' ;
                    echo '<td>'. $row['Profe_orga']. '</td>' ;
                    echo '<td>'. $row['Expe_orga']. '</td>' ;
                    echo '<td>'. $row['Edad_orga']. '</td>' ;
                    echo '<td>'. $row['Sexo_orga']. '</td>' ;
                    ?>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $con; ?>" id="ingresar">Editar</button></td>
                    <?php
                    echo '</tr>';
                    ?>

                    <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $con; ?>">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Actualizar Organizador</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="actualizar_organizador.php" method="POST">
                                        <input type="text" name="id" value=<?php echo $row['_id']['$oid']?> hidden>
                                        <br>
                                        <label>documento</label>
                                        <input type="text" name="documento" value=<?php echo $row['Id_orga']?>>
                                        <br>
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" value=<?php echo $row['Nom_orga'] ?>>
                                        <br>
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" value=<?php echo $row['Ape_orga'] ?>>
                                        <br>
                                        <label>Usuario</label>
                                        <input type="text" name="usuario" value=<?php echo $row['Usuario_orga'] ?>>
                                        <br>
                                        <label>movil</label>
                                        <input type="text" name="movil" value=<?php echo $row['Mov_orga'] ?>>
                                        <br> 
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" value=<?php echo $row['Tel_orga'] ?>>
                                        <br>  
                                        <label>correo</label>
                                        <input type="text" name="correo" value=<?php echo $row['Corr_orga'] ?>>
                                        <br>
                                        <label>Direccion</label>
                                        <input type="text" name="direccion" value=<?php echo $row['Dire_orga'] ?>>
                                        <br> 
                                        <label>Profesion</label>
                                        <input type="text" name="profesion" value=<?php echo $row['Profe_orga'] ?>>
                                        <br> 
                                        <label>Experiencia</label>
                                        <input type="text" name="experiencia" value=<?php echo $row['Expe_orga'] ?>>
                                        <br> 
                                        <label>Edad</label>
                                        <input type="text" name="edad" value=<?php echo $row['Edad_orga'] ?>>
                                        <br> 
                                        <label>Sexo</label>
                                        <select name="sexo">
                                            <?php
                                            if ($row['Sexo_orga']=="Hombre"){
                                                ?>
                                                <option value="Hombre" selected>Hombre</option>
                                                <option value="Mujero">Mujer</option>
                                                <option value="Otro">Otro</option>
                                                <?php
                                            }elseif ($row['Sexo_orga']=="Mujer"){
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