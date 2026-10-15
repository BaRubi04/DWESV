<?php 
    require '../controlador/c_asignatura.php';
    $objAsignatura = new Asignatura();
    $estado = $objAsignatura->modificar($_POST["idAsignatura"],$_POST["nombre"],$_POST["color"]);
    if($estado == 'positivo')
        echo '<h1>Modificación exitosa</h1>';
    else
        echo '<h1>Modificación errónea</h1>';
    echo '<a href="../vista/v_asignatura_listado.php">VOLVER</a>';
?>