<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="guardar_proveedor.php" method="POST">
        <div class="form-group">
            <label>identificacion del proveedor</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label>RUT</label>
            <input type="text" class="form-control" name="rut">
        </div>
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label>movil Proveedor</label>
            <input type="text" class="form-control" name="celular">
        </div>
        <div class="form-group">
            <label>telefono del proveedor</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label>Correo</label>
            <input type="email" class="form-control" name="correo">
        </div>
        <div class="form-group">
            <label>direccion</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="form-group">
            <label>Ubicacion</label>
            <input type="text" class="form-control" name="ubicacion">
        </div>
        <button type="submit" class="btn btn-primary">enviar</button>
        </form>
    </div>
</body>  