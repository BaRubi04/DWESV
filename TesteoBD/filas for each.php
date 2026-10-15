<?php 
require 'configdb.php';
    $conexion = new mysqli($SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS);
    $consulta = "select * from asignatura";
    $resultado = $conexion->query($consulta);
    //$fila = $resultado->fetch_array(); //Array numérico
    $fila = $resultado->fetch_assoc();

    foreach($fila as $indice => $asignatura){
        echo $indice.' - '.$asignatura.'<br><br>';
    }

    $conexion->close();
?>