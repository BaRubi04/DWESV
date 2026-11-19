<?php

/* 
    En las rutas no puedo poner variables superglobales, porque al ser una ruta constante no cambian de valor.
*/

// PROCESOS CON VISTAS
    define('PROCESO_LISTADO_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=listarAsignaturas');
    define('PROCESO_FORMULARIO_ALTA_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=formularioAlta');
    define('PROCESO_FORMULARIO_MODIFICACION_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=formularioModificar&id=');  
    define('PROCESO_PREGUNTAR_BORRAR','./index.php?controlador=C_Asignatura&metodo=preguntarBorrar&id=');
    define('PROCESO_RESULTADO_ANADIR_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=resultadoAnadirAsignatura&resultado=');
    define('PROCESO_RESULTADO_MODIFICAR_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=resultadoModificarAsignatura&resultado=');
    define('PROCESO_RESULTADO_BORRAR_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=resultadoBorrarAsignatura&resultado=');

    define('PROCESO_CONTROL_HORARIO','./index.php?controlador=C_Horario&metodo=vistaControlHorario');
    define('PROCESO_SELECCION_CURSO_VISUALIZAR_HORARIO','./index.php?controlador=C_Curso&metodo=listadoCursosConHorario');
    define('PROCESO_SELECCION_CURSO_ALTA_HORARIO','./index.php?controlador=C_Curso&metodo=listadoCursosSinHorario');
    define('PROCESO_SELECCION_CURSO_BORRAR_HORARIO','./index.php?controlador=C_Curso&metodo=listadoCursosConHorario&borrar=si');
    define('PROCESO_ALTA_HORARIO','./index.php?controlador=C_Horario&metodo=datosHorarioAlta&iteradorDias=');
    define('PROCESO_VISUALIZAR_HORARIO','./index.php?controlador=C_Horario&metodo=visualizarHorario&curso=');

    define('PROCESO_FORMULARIO_INICIO_SESION','./index.php?controlador=C_Usuario&metodo=llevarIS');
    define('PROCESO_INICIO_SESION','./index.php?controlador=C_Usuario&metodo=iniciarSesion');
    
// VISTAS
    define('VISTA_LISTADO_ASIGNATURAS','./vistas/asignatura/v_listado.php');
    define('VISTA_FORMULARIO_ALTA_ASIGNATURAS','./vistas/asignatura/v_formulario_anadir.php');
    define('VISTA_FORMULARIO_MODIFICAR_ASIGNATURAS','./vistas/asignatura/v_formulario_modificar.php');
    define('VISTA_PREGUNTAR_BORRADO_ASIGNATURAS','./vistas/asignatura/v_preguntar_borrar.php');
    define('VISTA_RESULTADO_ANADIR_ASIGNATURAS','./vistas/asignatura/v_resultado_anadir.php');
    define('VISTA_RESULTADO_BORRAR_ASIGNATURAS','./vistas/asignatura/v_resultado_borrar.php');
    define('VISTA_RESULTADO_MODIFICAR_ASIGNATURAS','./vistas/asignatura/v_resultado_modificar.php');

    define('VISTA_CONTROL_HORARIO','./vistas/horario/v_control_horario.php');
    define('VISTA_SELECCION_CURSO_VISUALIZAR_HORARIO','./vistas/horario/v_seleccion_curso_visualizar_horario.php');
    define('VISTA_SELECCION_CURSO_ALTA_HORARIO','./vistas/horario/v_seleccion_curso_alta_horario.php');
    define('VISTA_SELECCION_CURSO_BORRAR_HORARIO','./vistas/horario/v_seleccion_curso_borrar_horario.php');
    define('VISTA_ALTA_HORARIO','./vistas/horario/v_alta_horario.php');
    define('VISTA_VISUALIZAR_HORARIO','./vistas/horario/v_visualizacion_horario.php');
    
    define('VISTA_INICIAL','./vistas/v_inicio.php');

    define('VISTA_INICIO_SESION','./vistas/usuario/v_inicio_sesion.php');

// HOJA DE ESTILOS
    define('ESTILOS','./vistas/estilos.css');

// PROCESOS SIN VISTAS
    define('PROCESO_CONTROL_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=controlar&id=');
    define('PROCESO_ALTA_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=anadirAsignatura');
    define('PROCESO_BORRAR_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=borrarAsignatura&id=');
    define('PROCESO_MODIFICAR_ASIGNATURAS','./index.php?controlador=C_Asignatura&metodo=modificarAsignatura');

    define('PROCESO_BORRAR_HORARIO','./index.php?controlador=C_Curso&metodo=borrarHorario');
    define('PROCESO_ANADIR_DIA','./index.php?controlador=C_Horario&metodo=anadirDia&iteradorDias=');
    define('PROCESO_MODIFICAR_HORA','./index.php?controlador=C_Horario&metodo=modificarHora');

    define('PROCESO_DESTRUIR_SESION','./index.php?controlador=C_Usuario&metodo=destruirSesion');

// MODELOS
    define('MODELO_CURSO','./modelos/M_Curso.php');
    define('MODELO_HORARIO','./modelos/M_Horario.php');
    define('MODELO_ASIGNATURA','./modelos/M_Asignatura.php');
    define('MODELO_USUARIO','./modelos/M_Usuario.php');
    define('CONEXION','./modelos/Conexion.php');

// OTROS
    define('CONFIGDB','./otros/configdb.php');
?>