<?php 
    require '../controlador/c_asignatura.php';
    $estado = borrar($conexion,$id);
    header('Location: ../vista/v_asignatura_listado.php?estado='.$estado);
    exit;
?>