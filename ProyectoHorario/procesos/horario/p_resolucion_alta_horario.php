<?php 
    $curso = $_POST["curso"];
    $iterador = $_POST["iteradorDias"] + 1;
    //Aquí se haría la inserción

    
    if($iterador == 4){//Si el iterador llega a 4 (viernes), que rediriga a otra página
        header('Location: pagina_principal_horario.php');//(Página que aún no he hecho)
    }
    else
        header('Location: alta_horario.php?iteradorDias='.$iterador.'&curso='.$curso);
?>