<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once '../../controladores/C_Horario.php'; 

    $objHorario = new C_Horario();
    $filas = $objHorario->datosHorarioAlta(); // Llama a un método que conecta con modelos asignatura y curso

    include $objHorario->vista;
?>
