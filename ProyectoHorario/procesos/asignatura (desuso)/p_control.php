<?php
    if($_GET["opcion"] == 'modificar')
        header('Location: ./p_modificar_asignatura.php?id='.$_GET["id"]);
    else
        header('Location: ../vistas/asignatura/v_borrar_preguntar.php?id='.$_GET["id"]);  
?>