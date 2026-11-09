<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require '../controladores/c_curso.php';
    $objCurso = new C_Curso();
    $fila = $objCurso->nombreCurso($_GET["curso"]);
    //Recibe curso por GET, lo manda por POST.
    include $objCurso->vista;
?>
