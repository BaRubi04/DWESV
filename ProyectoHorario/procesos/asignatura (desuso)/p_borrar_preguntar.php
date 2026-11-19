<?php 
    require_once '../../controladores/c_asignatura.php';
    $objAsignatura = new C_Asignatura();
    
    include $objAsignatura->vista;
?>