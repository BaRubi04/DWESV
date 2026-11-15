<?php
    require_once '../modelos/m_curso.php';
    class C_Curso{
        
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Curso();
        }

        public function listadoCursosConHorario(){
            $this->vista = '../vistas/horario/v_seleccion_curso_verHorario.php';
            return $this->modelo->listadoCursosConHorario();
        }

        public function listadoCursosSinHorario(){
            $this->vista = '../vistas/horario/v_seleccion_curso_altaHorario.php';
            return $this->modelo->listadoCursosSinHorario();
        }

        public function nombreCurso(){
            return $this->modelo->nombreCurso();
        }

    }
?>