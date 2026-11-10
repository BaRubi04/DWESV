<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require '../../controladores/c_curso.php';
    require '../../controladores/c_asignaturas.php';

    $objCurso = new C_Curso();
    $dato = $objCurso->nombreCurso();
    
    $objAsig = new C_Asignatura();
    $filas = $objAsig->listadoAsignaturas();
    
    //Recibe curso por GET, lo manda por POST.
    include $objCurso->vista;
?>
