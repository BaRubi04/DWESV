<?php
    require_once '../../modelos/m_asignatura.php';
    require_once '../../modelos/m_curso.php';
    require_once '../../modelos/m_horario.php';
    class C_Horario{
        
        
        private $modeloHorario;
        private $modeloCurso;
        private $modeloAsignatura;

        public $vista;
        public $nombreCursoSeleccionado;//Solo el nombre, el id ya está en el GET
        public $arrayDias = ['Lunes','Martes','Miércoles','Jueves','Viernes'];

        function __construct(){
            $this->modeloHorario = new M_Horario();
            $this->modeloCurso = new M_Curso();
        }

        public function datosHorario(){//llama al modelo curso y asignatura para obtener sus datos para el proceso de alta
            $this->vista = '../../vistas/horario/v_alta_horario.php';
            $resultado = $this->modeloCurso->nombreCurso();
            $this->nombreCursoSeleccionado = $resultado["nombre"];
            return $this->modeloHorario->listadoAsignaturasCurso();//devuelve el objeto result, que luego se saca sus datos con un foreach
        }

        public function anadirDia() {//se usará en p_resolucion_alta_horario.php
            $this->modeloHorario->anadirDia();
        }

        public function visualizarHorario(){
            $this->vista = '../../vistas/horario/v_pagina_principal_horario.php';
            return $this->modeloHorario->horarioCompleto();
        }

    }
?>