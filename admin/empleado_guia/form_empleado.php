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
        <form action="guardar_empleado.php" method="POST">
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
            <label>Telefono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        <div class="form-group">
            <label>Celular</label>
            <input type="text" class="form-control" name="celular">
        </div>
        <div class="form-group">
            <label>Contacto</label>
            <input type="text" class="form-control" name="contacto">
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
        <div class="form-group">
            <label>Ciudad</label>
            <input type="text" class="form-control" name="ciudad">
        </div>
        <button type="submit" class="btn btn-primary">enviar</button>
        </form>
    </div>
</body>  