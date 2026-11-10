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
            $this->modeloAsignatura = new M_Asignatura();
        }

        public function datosHorario(){//llama al modelo curso y asignatura para obtener sus datos para el proceso de alta
            $this->vista = '../../vistas/asignatura/v_listado_asignatura.php';
            $this->$cursoSeleccionado = $this->modeloCurso->nombreCurso();
            return $this->modeloAsignatura->listadoAsignaturas();//devuelve el objeto result, que luego se saca sus datos con un foreach
        }

        public function anadirDia() {//se usará en p_resolucion_alta_horario.php
            $this->modeloHorario->anadirDia();
        }

    }
?>