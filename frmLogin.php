<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Registro</title>
  <link rel="stylesheet" href="aplicaciones/css/estilos.css">
</head>
<body>
  <div class="container">
    <br> <br> <br> <br> <br>

     <form action="../controlador/controllogin.php"  methodo="GET" class="form" >
    <p class="form-titulo">Inicio Sesión</p>
     
      <div class="form-input email">
        <input type="email" id="email" name="txtcorreo">
        <label for="email">Correo electrónico</label>
        <p class="mensajeError"></p>
      </div>
      <div class="form-input password">
        <input type="password" id="password" name="txtclave">
        <label for="password">Contraseña</label>

        
        <p class="mensajeError"></p>
      </div>
    
      <div class="form-boton" >
        <input type="submit" value="Enviar">

      </div>
      <p class="mensajeCorrecto"></p>
    </form>
  </div>
  <script src="js/form.js"></script>
</body>
</html>