<?php
class Conexion{
    private $server='loacalhost';
    private $user='root';
    private $database='tallerGK';//NOMBRE DE SU BASE DE DATOS

    public function __contruct(){
        try{
            $connect=new PDO("mysql:host=".$this->$server.";dbname=".$this->database,$this->$user,$this->$password);
            //return $connect;
            echo "Se Conecto la base";
            //return $connect;
        }catch(PDOException $error){
            return "Error al conectarse: ".$error;
        }
    }
}