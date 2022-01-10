<?php

 class Seleccionados{
     private $nombre;
     private $apellido;
     private $edad;
     private $titulos;
     private $goles;
     private $equipo;
     private $con;

    public function _construct($con){
        $this->con = $con;
    }

     public function todos(){
         $sql = "SELECT * FROM seleccionados";
         $resultado = mysqli_query($this->con, $sql);
         $seleccionados = array();
         while($seleccionado = mysqli_fetch_assoc($resultado)){
             $seleccionados[] = $seleccionado;
         }
         return $seleccionados;
     }
 }