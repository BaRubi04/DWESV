<?php
    require_once '../modelos/m_asignatura.php';
    require_once '../modelos/m_curso.php';
    require_once '../modelos/m_horario.php';
    
    class C_Horario{
        
        
        private $modeloHorario;
        private $modeloCurso;
        private $modeloAsignatura;

        public $vista;
        public $nombreCursoSeleccionado;//Solo el nombre, el id ya está en el GET
        public $arrayDias = ['Lunes','Martes','Miércoles','Jueves','Viernes'];
        public $dias = ['L', 'M', 'X', 'J', 'V'];

        function __construct(){
            $this->modeloHorario = new M_Horario();
            $this->modeloCurso = new M_Curso();
        }

        public function datosHorarioAlta(){//llama al modelo curso y asignatura para obtener sus datos para el proceso de alta
            $this->vista = 'horario/v_alta_horario.php';
            $resultado = $this->modeloCurso->nombreCurso();
            $this->nombreCursoSeleccionado = $resultado["nombre"];
            return $this->modeloHorario->listadoAsignaturasCurso();//devuelve el objeto result, que luego se saca sus datos con un foreach
        }

        public function anadirDia() {//se usará en p_resolucion_alta_horario.php
            $iterador = $_GET["iteradorDias"] + 1;
            $this->modeloHorario->anadirDia();
            if($iterador == 5)// 4 es viernes, 5 ya se pasa.
                header('Location: ./index.php?controlador=C_Horario&metodo=visualizarHorario&curso='.$_GET["curso"]);//Visualización del horario que has rellenado
            else header('Location: ./index.php?controlador=C_Horario&metodo=datosHorarioAlta&iteradorDias='.$iterador.'&curso='.$_GET["curso"]);
        }

        public function visualizarHorario(){
            $this->vista = 'horario/v_visualizacion_horario.php';
            $resultado = $this->modeloHorario->datosHorario();
            $horario = [];
            while($fila = $resultado->fetch_assoc()){
                $horario[$fila["dia"]][$fila["hora"]] = [
                    "nombre" => $fila["nombre"],// $horario['L'][1]["nombre"] = 'PRO' (por ejemplo)
                    "color"  => $fila["color"]// $horario['L'][1]["color"] = '#ff0000' (por ejemplo)
                ];
            }
            return $horario;
        }

        public function borrarHorario(){
            $this->modeloHorario->borrarHorario();
            header('Location: ../vistas/horario/v_control_horario.html');
        }

        /*
        public function modificarHora(){
            $this->modeloHorario->modificarHora();
            header('Location: ./index.php?controlador=C_Horario&metodo=visualizarHorario&curso='.$_GET["curso"]);
        }
        */
    }
?>