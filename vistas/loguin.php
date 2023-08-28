<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-secondary d-grid" style="height:100vh;">
<?php
include('elemets/header.php')
?>

<main class="d-grid justify-content-center align-items-center">
    
    <form action="../controlador/controllogin.php" method="post" class="container-fluid p-5 rounded" id="form" style="width:40vw; height:max-content; background:#db9fc5;">
        <h1 class="text-uppercase">loguin</h1>
        <hr>
        <div class="d-flex flex-column mb-2">
            <label for="correo_Usuario" class="text-black">Correo_Usuario</label>
            <input type="email" name="correo_Usuario" id="correo_Usuario" required>
        </div>
        <div class="d-flex flex-column mb-2">
            <label for="password_usuario" class="text-black">password_usuario</label>
            <input type="password" name="password_usuario" id="password_usuario" required>
        </div>

        <hr>

        <input type="submit" class="container-fluid" value="Enviar">
    </form>
</main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>