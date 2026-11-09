<?php
    require '../modelos/m_curso.php';
    class C_Curso{
        
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Curso();
        }

        public function listadoCursos(){
            $this->vista = '../vistas/v_seleccion_curso.php';
            return $this->modelo->listadoCursos();
        }

        public function nombreCurso($idCurso){
            $this->vista = '../vistas/v_alta_horario.php';
            return $this->modelo->listadoCursos();
        }

    }
?>