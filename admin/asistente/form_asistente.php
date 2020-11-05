<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asistente</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>

    <div class="container">
        <form action="guardar_asistente.php" method="POST">
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
</body>  