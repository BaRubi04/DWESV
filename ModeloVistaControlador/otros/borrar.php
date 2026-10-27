<?php 
    require '../controlador/c_asignatura.php';
    $objAsignatura = new Asignatura();

    echo '<h1>PÁGINA DE BORRADO</h1>';
    echo '<a href="borrar.php?id='.$_GET["id"].'&borrar=si"><h3>BORRAR</h3></a>';
    echo '<a href="../vista/v_asignatura_listado.php"><h3>NO BORRAR</h3></a><br>';

    if($_GET["borrar"] == 'si'){
        $estado = $objAsignatura->borrar($_GET["id"]);
        if($estado == 'positivo')
            echo '<h1><i>Borrado exitoso</i></h1>';
        else
            echo '<h1><i>Borrado erróneo</i></h1>';
        echo '<a href="../vista/v_asignatura_listado.php">VOLVER</a>';
    }
?>