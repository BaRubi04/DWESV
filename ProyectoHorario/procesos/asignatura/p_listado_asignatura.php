<?php
    require '../../controladores/c_asignaturas.php';
    $objAsig = new C_Asignatura();
    $filas = $objAsig->listado();
    include $objAsig->vista;
?>