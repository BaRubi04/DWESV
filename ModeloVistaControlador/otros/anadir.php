<?php 
    require '../controlador/c_asignatura.php';
    $objAsignatura = new Asignatura();
    $estado = $objAsignatura->anadir($_POST["nombre"],$_POST["color"]);
    if($_GET["estado"] == 'positivo')
        echo '<h1>Inserción exitosa</h1>';
    else
        echo '<h1>Inserción errónea</h1>';
    echo '<a href="../vista/v_asignatura_listado.php">VOLVER</a>';
?>