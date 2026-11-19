<?php
    require_once '../../controladores/c_asignatura.php';
    $objAsignatura = new C_Asignatura();
    $fila = $objAsignatura->consultaNombreColor();
    include $objAsignatura->vista;
?>