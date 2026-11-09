<?php 
    require '../../controladores/c_asignatura.php';
    $objAsignatura = new C_Asignatura();
    
    include $objAsignatura->vista;
?>