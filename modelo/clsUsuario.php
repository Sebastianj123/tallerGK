<?php
require_once("conexion.php");

class usuario extends conexion{
    private$IdUsu;
    private$NumbreDocUsu;
    private$TipoDocUsu;
    private$NomUsua;
    private$ApellidoUsa;
    private$DireccionUsa;
    private$TelfUsua;
    private$CorreoUsuario;
    private$ClaveUsua;
    private$fotoUsua;
    private$EstadoUsua;
};

public function__construct()
   
   {
    //acceder a una clasepadre
   $this->db=parent: :__construct();
}


     //Encapsulamiento
   public function getIdUsu(){
    return $this->IdUsu;
}

public function setIdUsu($IdUsu){
    $this->IdUsu = $IdUsu;
}

public function getNumbreDocUsu(){
    return $this->NumbreDocUsu;
}

public function setNumbreDocUsu($NumbreDocUsu){
    $this->NumbreDocUsu = $NumbreDocUsu;
}

public function getTipoDocUsu(){
    return $this->TipoDocUsu;
}

public function setTipoDocUsu($TipoDocUsu){
    $this->TipoDocUsu = $TipoDocUsu;
}

public function getNomUsua(){
    return $this->NomUsua;
}

public function setNomUsua($NomUsua){
    $this->NomUsua = $NomUsua;
}

public function getApellidoUsa(){
    return $this->ApellidoUsa;
}

public function setApellidoUsa($ApellidoUsa){
    $this->ApellidoUsa = $ApellidoUsa;
}

public function getDireccionUsa(){
    return $this->DireccionUsa;
}

public function setDireccionUsa($DireccionUsa){
    $this->DireccionUsa = $DireccionUsa;
}

public function getTelfUsua(){
    return $this->TelfUsua;
}

public function setTelfUsua($TelfUsua){
    $this->TelfUsua = $TelfUsua;
}

public function getCorreoUsuario(){
    return $this->CorreoUsuario;
}

public function setCorreoUsuario($CorreoUsuario){
    $this->CorreoUsuario = $CorreoUsuario;
}

public function getClaveUsua(){
    return $this->ClaveUsua;
}

public function setClaveUsua($ClaveUsua){
    $this->ClaveUsua = $ClaveUsua;
}

public function getFotoUsua(){
    return $this->fotoUsua;
}

public function setFotoUsua($fotoUsua){
    $this->fotoUsua = $fotoUsua;
}

public function getEstadoUsua(){
    return $this->EstadoUsua;
}

public function setEstadoUsua($EstadoUsua)
    $this->EstadoUsua = $EstadoUsua;

   public function login(){
       $consulta=$this ->db-> prepare(" SELECT * from USUARIO WHERE IdUsuario and claveUsuario=: clave;");
       $consulta->bindparam (':usuario',$this->IdUsua);
       $consulta->bindparam (':clave',$this->claveUsua);
       $consulta->execute();

       if($consulta->rowcount()==1){
        return true;
       }else {
        return false;
       }
   
        }

        

?>