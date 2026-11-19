<?php
    require_once MODELO_CURSO;
    class C_Curso{
        
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Curso();
        }

        public function listadoCursosConHorario(){
            session_start();
            if(isset($_GET["borrar"]) && $_GET["borrar"] == 'si') 
                $this->vista = VISTA_SELECCION_CURSO_BORRAR_HORARIO;
            else 
                $this->vista = VISTA_SELECCION_CURSO_VISUALIZAR_HORARIO;
            return $this->modelo->listadoCursosConHorario();
        }

        public function listadoCursosSinHorario(){
            session_start();
            $this->vista = VISTA_SELECCION_CURSO_ALTA_HORARIO;
            return $this->modelo->listadoCursosSinHorario();
        }

        public function nombreCurso(){
            return $this->modelo->nombreCurso();
        }

    }
?>