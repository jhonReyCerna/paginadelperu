<?php

 class BaseDatos{
     private $host = "localhost";
     private $user = "root";
     private $pass = "";
     private $db = "paginadelperu"; 
    private $con;
     
    public function conectar (){
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if(!$this->con){
            echo "Error al conectar con la base de datos";
        }
        return $this->con;
    }
 }