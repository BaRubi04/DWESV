<?php
    require_once MODELO_USUARIO;
    class C_Usuario{
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Usuario();
        }
        public function llevarIS(){
            session_start();
            $this->vista = VISTA_INICIO_SESION;
        }
        public function iniciarSesion(){
            $this->modelo->iniciarSesion();
            header('Location: '.PROCESO_FORMULARIO_INICIO_SESION);
        }

        public function destruirSesion(){
            session_start();
            session_destroy();
            header('Location: '.PROCESO_FORMULARIO_INICIO_SESION);
        }
    }
?>