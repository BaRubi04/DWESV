<?php 
    require '../controlador/c_asignatura.php';
    $objAsignatura = new Asignatura();
    $estado = $objAsignatura->modificar($_POST["id"],$_POST["nombre"],$_POST["color"]);
    header('Location: resultado_modificar.php?estado='.$estado);
    exit;
?>