<?php 
    $curso = $_POST["curso"];
    $iterador = $_POST["iteradorDias"] + 1;
    
    require '../../controladores/c_horario.php';
    $objHorario = new C_Horario();
    $objHorario->anadirDia();

    if($iterador == 4){//Si el iterador llega a 4 (viernes), que rediriga a otra página
        header('Location: pagina_principal_horario.php');//(Página que aún no he hecho)
    }
    else
        header('Location: ./p_alta_horario.php?iteradorDias='.$iterador.'&curso='.$curso);
?>