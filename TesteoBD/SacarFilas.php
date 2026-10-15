<?php 
require 'configdb.php';
    $conexion = new mysqli($SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS);
    $consulta = "select * from asignatura";
    $resultado = $conexion->query($consulta);
    $fila = $resultado ->fetch_array();

    echo $fila['idAsignatura'].','.$fila['nombre'].','.$fila['color'].'<br>';
    $fila = $resultado ->fetch_array();
    echo $fila['idAsignatura'].','.$fila['nombre'].','.$fila['color'].'<br>';
    $fila = $resultado ->fetch_array();
    echo $fila['idAsignatura'].','.$fila['nombre'].','.$fila['color'].'<br>';
  
    $fila = $resultado ->fetch_array();
    if($fila = $resultado->fetch_array())// Entra
        echo $fila['idAsignatura'].','.$fila['nombre'].','.$fila['color'].'<br>';

    $fila = $resultado ->fetch_array();
    if($fila = $resultado->fetch_array())// No entra, no muestra error.
        echo $fila['idAsignatura'].','.$fila['nombre'].','.$fila['color'].'<br>';

    $conexion->close();
?>