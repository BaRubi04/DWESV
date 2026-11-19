<?php 
    require_once '../../controladores/c_asignatura.php';
    $objAsignatura = new C_Asignatura();

    if($_GET["borrar"] == 'si'){
        $estado = $objAsignatura->borrar($_GET["id"]);
        if($estado == 'positivo')
            $mensaje = '<h1><i>Borrado exitoso</i></h1>';
        else
            $mensaje = '<h1><i>Borrado erróneo</i></h1>';
    }
    
    include $objAsignatura->vista;
?>