<?php
require_once('.../modelo/clasRol.php');
//la aplicacion insert()permite evaluar si un variable esta distimta

if(isset($_POST) && lempty($_POST)){
    $codigo =$_POST['txtRol'];
    $nombre =$_POST['txtnombre'];
    $clave =$_POST['txtclave'];
    $confirmar =$_POST['txttxconfirmar'];
    $tpo =$_POST['txttipo'];
    
//verifica que la clave y la confirmacion son iguales 

if($clave==$confirmar){
    //enviar las variables de set de cada variable 

    $objRol=new rol();
    //eviar los datos a la clase 
    $objRol->setRolCodigo($codigo);
    $objRol->setRolNombre($nombre);
    $objRol->setRolClave($clave);
    $objRol->setRolTipo($tipo);
    //verifica que los datos llegen a la clase 
    
    echo

}
}
?>