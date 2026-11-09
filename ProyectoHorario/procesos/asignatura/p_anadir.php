<?php 
    require '../../controladores/c_asignatura.php';
    $objAsignatura = new C_Asignatura();
    $estado = $objAsignatura->anadir();
    if($_GET["estado"] == 'positivo')
        $mensaje = '<h1>Inserción exitosa</h1>';
    else
        $mensaje = '<h1>Inserción errónea</h1>';
    include $objAsignatura->vista;
?>