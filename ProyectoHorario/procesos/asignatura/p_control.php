<?php
    if($_GET["opcion"] == 'modificar')
        header('Location: ./p_modificar_asignatura.php?id='.$_GET["id"]);
    else
        header('Location: ./p_borrar.php?id='.$_GET["id"]);  
?>