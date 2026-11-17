<?php
    require_once MODELO_CURSO;
    require_once MODELO_HORARIO;
    
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

        public function vistaControlHorario(){
            $this->vista = VISTA_CONTROL_HORARIO;
        }

        public function datosHorarioAlta(){//llama al modelo curso y asignatura para obtener sus datos para el proceso de alta
            $this->vista = VISTA_ALTA_HORARIO;
            $resultado = $this->modeloCurso->nombreCurso();
            $this->nombreCursoSeleccionado = $resultado["nombre"];
            return $this->modeloHorario->listadoAsignaturasCurso();//devuelve el objeto result, que luego se saca sus datos con un foreach
        }

        public function anadirDia() {
            $this->modeloHorario->anadirDia();
            $_GET["iteradorDias"]++;
            if($_GET["iteradorDias"] == 5)// 4 es viernes, 5 ya se pasa.
                header('Location: '.PROCESO_VISUALIZAR_HORARIO.$_GET["curso"]);
            else header('Location: '.PROCESO_ALTA_HORARIO.$_GET["iteradorDias"].'&curso='.$_GET["curso"]);
        }

        public function visualizarHorario(){
            $this->vista = VISTA_VISUALIZAR_HORARIO;
            $resultado = $this->modeloCurso->nombreCurso();
            $this->nombreCursoSeleccionado = $resultado["nombre"];
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
            header('Location: '.PROCESO_CONTROL_HORARIO);
        }
  
        public function modificarHora(){// NO FUNCIONA AÚN
            $this->modeloHorario->modificarHora();
            header('Location: '.PROCESO_VISUALIZAR_HORARIO);
        }
        
    }
?>