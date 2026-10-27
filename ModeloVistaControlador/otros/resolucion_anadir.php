<?php 
    require '../controlador/c_asignatura.php';
    $objAsignatura = new Asignatura();
    $estado = $objAsignatura->anadir($_POST["nombre"],$_POST["color"]);
    header('Location: resultado_anadir.php?estado='.$estado);
    exit;
?>