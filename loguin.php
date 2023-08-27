<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="d-grid bg-primary justify-content-center">
    
    <form action="controlador/controllogin.php" method="post" class="bg-dark container-fluid p-4 rounded" id="form">
        <div class="">
            <label for="correo_Usuario" class="text-danger">Correo_Usuario</label>
            <input type="email" name="correo_Usuario" id="correo_Usuario" required>
        </div>
        <div>
            <label for="password_usuario" class="text-danger">password_usuario</label>
            <input type="password" name="password_usuario" id="password_usuario" required>
        </div>

        <input type="submit" value="Enviar">
    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>