<?php
    require '../controladores/c_curso.php';
    $objCurso = new C_Curso();
    $datos = $objCurso->listadoCursos();
    include $objCurso->vista;
?>
