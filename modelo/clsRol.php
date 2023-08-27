<?php
require_once("conexion.php");

class Rol extends conexion{
    private$IdRol;
    private$descripcionRol;
    private$TipoDocUsu;

    {
        // acceder a una clasepadre
        $this->db=parent::__construct();
        }
   
        //Encapsulamiento
        public function getIdRol(){
            return $this->IdRol;
        }
   
        public function setIdRol($IdRol){
            $this->IdRol = $IdRol;
        }
   
        public function getDescripcionRol(){
            return $this->descripcionRol;
        }
   
        public function setDescripcionRol($descripcionRol){
            $this->descripcionRol = $descripcionRol;
        }
   
        public function getTipoDocUsu(){
            return $this->TipoDocUsu;
        }
   
        public function setTipoDocUsu($TipoDocUsu){
            $this->TipoDocUsu = $TipoDocUsu;
        }