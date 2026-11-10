<?php
    require_once '../../modelos/m_curso.php';
    class C_Curso{
        
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Curso();
        }

        public function listadoCursos(){
            $this->vista = '../../vistas/horario/v_seleccion_curso.php';
            return $this->modelo->listadoCursos();
        }

        public function nombreCurso(){
            return $this->modelo->nombreCurso();
        }

    }
?>