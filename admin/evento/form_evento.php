<?php
    include "../conexion/conexion.php";
    session_start();
    if(!isset($_SESSION['rol'])){
        header('location: ../../vistas/usuario/iniciar_sesion.php');
    }else{
        if($_SESSION['rol'] !=1 ){
            header('location: ../../vistas/usuario/iniciar_sesion.php');
        }else{
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
        <div class="row col-12">
                <div class="col-3 col-md-3 bg-dark" style="min-height: 100vh;">
                    <div class="col-12 d-none d-lg-block text-center mb-5">
                    <a href="../../index.php"><img src="../../img/isologo-blan.png" class="mt-3" style="width: 60%;"></a>
                    </div>
            <div class="menu col-12">
                <a href="../asistente/form_asistente.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2" title="Asistente"></i><h5 class="m-1 navbar-enlaces">Asistente</h5></a>
                <a href="../empleado_guia/form_empleado.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-people lead mr-2" title="Empleado guía"></i><h5 class="m-1 navbar-enlaces">Empleado guía</h5></a>
                <a href="../organizador_tour/form_organizador.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2" title="Organizador"></i><h5 class="m-1 navbar-enlaces">Organizador</h5></a>
                <a href="form_evento.php" class="d-flex text-light p-3 border-0"><i class="icon ion-md-person lead mr-2" title="Proveedor"></i><h5 class="m-1 navbar-enlaces">Eventos</h5></a>
                <a href="../sitio/form_sitio.php" class="d-flex text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2" title="Sitio Turistico"></i><h5 class="m-1 navbar-enlaces">Sitio Turistico</h5></a>
                
            </div>
        </div>
        <div class="container formularios col-9">
            <h3>Eventos Tour</h3>
        <form action="guardar_evento.php" method="POST" class="col-12">
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo" required>
        </div>
        <div class="form-group">
            <label>Descripción</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" required>
        </div>
        <div class="form-group">
            <label>Ciudad</label>
            <input type="text" class="form-control" name="ciudad" id="ciudad" required>
        </div>
        <div class="form-group">
            <label>Url Imagen</label>
            <input type="text" class="form-control" name="imagen" id="imagen" required>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-color">Enviar</button>
        </div>
        </form>
        
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
</body>  