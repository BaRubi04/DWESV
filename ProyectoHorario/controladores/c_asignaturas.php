<?php
    require '../modelos/m_asignatura.php';
    class C_Asignatura{
        
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Asignatura();
        }

        public function listadoAsignaturas() {
            $this->vista = '../../vistas/asignatura/v_listado_asignatura.php';
            return $this->modelo->listadoAsignaturas();
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