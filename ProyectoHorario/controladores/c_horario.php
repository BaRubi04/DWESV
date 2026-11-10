<?php
    require_once '../../modelos/m_asignatura.php';
    class C_Horario{
        
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Horario();
        }

        public function anadirDia() {
            $this->vista = '../../vistas/asignatura/v_listado_asignatura.php';
            return $this->modelo->anadirDia();
        }

    }
?>