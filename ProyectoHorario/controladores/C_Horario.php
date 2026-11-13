<?php
    require_once '../modelos/m_curso.php';
    require_once '../modelos/m_horario.php';
    class C_Horario{
        
        
        private $modeloHorario;
        private $modeloCurso;
        private $modeloAsignatura;

        public $vista;
        public $nombreCursoSeleccionado;//Solo el nombre, el id ya está en el GET
        public $arrayDias = ['Lunes','Martes','Miércoles','Jueves','Viernes']; //Para visualizar el día en el alta
        public $dias = ['L','M','X','J','V']; //Para visualizar horario completo (índices)

        function __construct(){
            $this->modeloHorario = new M_Horario();
            $this->modeloCurso = new M_Curso();
        }

        public function datosHorarioAlta(){//llama al modelo curso y asignatura para obtener sus datos para el proceso de alta
            $this->vista = '../../vistas/horario/v_alta_horario.php';
            $resultado = $this->modeloCurso->nombreCurso();
            $this->nombreCursoSeleccionado = $resultado["nombre"];
            return $this->modeloHorario->listadoAsignaturasCurso();//devuelve el objeto result, que luego se saca sus datos con un foreach
        }

        public function anadirDia() {//se usará en p_resolucion_alta_horario.php
            $this->modeloHorario->anadirDia();
        }

        public function visualizarHorario(){
            $this->vista = '../vistas/horario/v_pagina_principal_horario.php';
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



    }
?>