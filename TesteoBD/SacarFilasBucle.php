<?php 
    require 'configdb.php';
    $conexion = new mysqli($SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS);
    $consulta = "select * from asignatura";
    $resultado = $conexion->query($consulta);

        if(!$fila = $resultado ->fetch_array())
            echo '<h1>Error, no hay filas</h1>';
        else {
            echo $fila['idAsignatura'].','.$fila['nombre'].','.$fila['color'].'<br>';
            echo '<hr/>';
            while($fila = $resultado ->fetch_array()){
                echo $fila['idAsignatura'].','.$fila['nombre'].','.$fila['color'].'<br>';
                echo '<hr/>';
            }
        }
        
        
    
    $conexion->close();
?>