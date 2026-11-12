<?php
    require_once '../../controladores/C_Curso.php';
    $objCurso = new C_Curso();
    $datos = $objCurso->listadoCursos();
    include $objCurso->vista;
?>
