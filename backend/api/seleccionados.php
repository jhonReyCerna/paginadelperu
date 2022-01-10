<?php
 
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');

 include_once '../../backend/config/BaseDatos.php';
    include_once '../../backend/models/Seleccionados.php';
    $bd = new BaseDatos();
    $con = $bd->conectar();
    $seleccionados = new Seleccionados($con);
    $resultado = $seleccionados->todos();
    echo json_encode($resultado);
?>

