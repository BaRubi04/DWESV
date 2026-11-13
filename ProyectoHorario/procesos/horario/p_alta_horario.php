<?php
    require_once '../../controladores/C_Horario.php'; 
    $objHorario = new C_Horario();
    $filas = $objHorario->datosHorarioAlta(); // Llama a un método que conecta con modelos asignatura y curso
    include $objHorario->vista;
?>
