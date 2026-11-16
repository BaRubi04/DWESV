<?php
// PROCESOS CON VISTAS
    define('PROCESO_CONTROL_HORARIO','./index.php?controlador=C_Horario&metodo=vistaControlHorario');
    define('PROCESO_SELECCION_CURSO_VISUALIZAR_HORARIO','./index.php?controlador=C_Curso&metodo=listadoCursosConHorario');
    define('PROCESO_SELECCION_CURSO_ALTA_HORARIO','./index.php?controlador=C_Curso&metodo=listadoCursosSinHorario');
    define('PROCESO_SELECCION_CURSO_BORRAR_HORARIO','./index.php?controlador=C_Curso&metodo=listadoCursosConHorario&borrar=si');
    define('PROCESO_ALTA_HORARIO','./index.php?controlador=C_Horario&metodo=datosHorarioAlta&iteradorDias='.$iterador.'&curso='.$_GET["curso"]);
    define('PROCESO_VISUALIZAR_HORARIO','./index.php?controlador=C_Horario&metodo=visualizarHorario&curso='.$_GET["curso"]);

// VISTAS ASOCIADAS A PROCESOS
    define('VISTA_CONTROL_HORARIO','./vistas/horario/v_alta_horario.php');
    define('VISTA_SELECCION_CURSO_VISUALIZAR_HORARIO','./vistas/horario/v_seleccion_curso_visualizar_horario.php');
    define('VISTA_SELECCION_CURSO_ALTA_HORARIO','./vistas/horario/v_seleccion_curso_alta_horario.php');
    define('VISTA_SELECCION_CURSO_BORRAR_HORARIO','./vistas/horario/v_seleccion_curso_borrar_horario.php');
    define('VISTA_ALTA_HORARIO','./vistas/horario/v_alta_horario.php');
    define('VISTA_VISUALIZAR_HORARIO','./vistas/horario/v_visualizacion_horario.php');

// HOJA DE ESTILOS
    define('ESTILOS','./vistas/estilos.css');

// PROCESOS SIN VISTAS
    define('PROCESO_BORRAR_HORARIO','./index.php?controlador=C_Curso&metodo=borrarHorario');
    define('PROCESO_ANADIR_DIA','./index.php?controlador=C_Horario&metodo=anadirDia&iteradorDias='.$_GET["iteradorDias"].'&curso='.$_GET["curso"]);
    define('PROCESO_MODIFICAR_HORA','./index.php?controlador=C_Horario&metodo=modificarHora');

// MODELOS
    define('MODELO_CURSO','./modelos/M_Curso.php');
    define('MODELO_HORARIO','./modelos/M_Horario.php');
    define('MODELO_ASIGNATURA','./modelos/M_Asignatura.php');
?>