<?php
    require_once MODELO_ASIGNATURA;
    class C_Asignatura{
        
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Asignatura();
        }

        public function listadoAsignaturas() {
            $this->vista = './vistas/asignatura/v_listado_asignatura.php';
            return $this->modelo->listadoAsignaturas();
        }

        public function control(){
            if($_GET["opcion"] == 'modificar')
                header('Location: ./p_modificar_asignatura.php?id='.$_GET["id"]);
            else
                header('Location: ../vistas/asignatura/v_borrar_preguntar.php?id='.$_GET["id"]);  
        }

        public function anadir() {
            $this->modelo->anadir();
        }
        
        public function consultaNombreColor() {
            $this->vista = '../../vistas/asignatura/v_modificar.php';
            return $this->modelo->consultaNombreColor();
        }

        public function modificar(){
            $this->modelo->modificar();
        }

        public function borrar(){
            $this->modelo->borrar();
        }
    }
?>