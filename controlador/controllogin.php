<?php 
// echo "Sistema de información";
// require_once ("../modelo/clsUsuario.php");

// if(isset($_POST) && !empty($_POST))
// {
//     $usuario = $_POST['txtcorreo'];
//     $clave = $_POST['txtclave'];

//     $objUsuario = new Usuario ();
//     $objUsuario->setCorreoUsuario($usuario);
//     $objUsuario->setClaveUsua($clave);
    
//     echo ("Usuario").$objUsuario->getCorreoUsuario($usuario);
//     echo ("Clave").$objUsuario->getClaveUsua($clave);

//     if ($objUsuario->Login()==true){
//         header('Location: ../vistas/MenuPrincipal.php');
//     }else{
//         header('Location: ../vistas/frmLogin.php?mensaje=error');
//     }
// }
// ?>

<?php
// Incluimos un archivo externo con la coneccion a base de datos la cual esta declarada como "$con"
    include('../config/connect.php');

    // Declaramos las variables según corresponde el campo y el nombre de la columna en la base de datos
    $correo_Usuario = $_POST['correo_Usuario'];
    $password_usuario = $_POST['password_usuario'];

    // Se declara una sentencia o query sql donde se visualizan los datos del id, correo, password y estatus
    $sql = 'CALL v_regUsuario ("'. $correo_Usuario .'");';
    // Se hace la sentencia (query) 
    $query = $con -> query($sql);

    // se almacena en otra variable la sentencia query dentro de un array asociativo (se devuelve la fila segun el correo)
    $string = $query -> fetch_all(MYSQLI_ASSOC);
    // var_dump($string);
    // Se revisa si devuleve algun dato de lo contrario no existe el usuario
    if(count($string) > 0) {

        // Se revisa la compativilidad entre contraseñas de lo contrario marca un error
        // echo('El correo esta bien existe');
        if ($string[0]['password_usuario'] == $password_usuario) {
            echo('Esta todo correcto OK');
            $rol = $string[0]['idRolusuarioFK'];
            header("Location: ../vistas/user/index.php?rol=$rol");
        }   
        else {
            echo('El usurio si existe pero la contraseña es incorrecta (rectifique su correo y contraseña)');
        }
    
    } else {
        echo('El usurio no existe (rectifique su correo)');
    }

?>