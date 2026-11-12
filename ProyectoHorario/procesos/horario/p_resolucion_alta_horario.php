<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $curso = $_GET["curso"];
    $iterador = $_GET["iteradorDias"] + 1;
    
    require_once '../../controladores/C_Horario.php';
    $objHorario = new C_Horario();
    $objHorario->anadirDia();

    if($iterador == 5){// 4 es viernes, 5 ya se pasa.
        header('Location: ../index.php?controlador=C_Horario&metodo=visualizarHorario&curso='.$curso);//Visualización del horario que has rellenado
    }
    else
        header('Location: ./p_alta_horario.php?iteradorDias='.$iterador.'&curso='.$curso);
?>