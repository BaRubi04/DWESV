<?php 
    $curso = $_GET["curso"];
    $iterador = $_GET["iteradorDias"] + 1;
    
    require_once '../../controladores/c_horario.php';
    $objHorario = new C_Horario();
    $objHorario->anadirDia();

    if($iterador == 4){// 4 es viernes
        header('Location: pagina_principal_horario.php');//(Página que aún no he hecho)
    }
    else
        header('Location: ./p_alta_horario.php?iteradorDias='.$iterador.'&curso='.$curso);
?>