<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once '../../controladores/c_horario.php'; 

    $objHorario = new C_Horario();
    $filas = $objHorario->datosHorario(); // Llama a un método que conecta con modelos asignatura y curso
    $nombreCursoSeleccionado = $objHorario->nombreCursoSeleccionado;
    $dia = $objHorario->arrayDias[$_GET["iteradorDias"]];

    include $objHorario->vista;
?>
