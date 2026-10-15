<?php
    if($_GET["opcion"] == 'modificar'){
        echo 'vas a modificar';
        header('Location: ../vista/formulario_modificar.php?id='.$_GET["id"]);
    }
    else{
        echo 'vas a borrar';
        header('Location: borrar.php?id='.$_GET["id"]);  
    }
?>