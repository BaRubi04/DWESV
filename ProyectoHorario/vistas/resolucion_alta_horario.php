<?php 
    $curso = $_POST["curso"];
    $iterador = $_POST["iteradorDias"] + 1;
    header('Location: alta_horario.php?iteradorDias='.$iterador.'&curso='.$curso); 
?>