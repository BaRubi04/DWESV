<?php 
    require_once '../../controladores/c_asignaturas.php';
    $objAsignatura = new C_Asignatura();
    $estado = $objAsignatura->modificar();
    if($estado == 'positivo')
        $mensaje = '<h1>Modificación exitosa</h1>';
    else
        $mensaje = '<h1>Modificación errónea</h1>';
    include $objAsignatura->vista;
?>