<?php 
    require '../controlador/c_asignatura.php';
    anadir($conexion,$_GET["nombre"],$_GET["color"]);
    header('Location: ../vista/v_asignatura_listado.php');
    exit;
?>