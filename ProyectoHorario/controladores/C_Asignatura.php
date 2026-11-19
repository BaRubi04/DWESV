<?php
    require_once MODELO_ASIGNATURA;
    class C_Asignatura{
        
        public $vista;
        private $modelo;
        function __construct(){
            $this->modelo = new M_Asignatura();
        }

        public function listarAsignaturas() {
            $this->vista = VISTA_LISTADO_ASIGNATURAS;
            return $this->modelo->listarAsignaturas();
        }

        public function controlar(){
            if($_GET["opcion"] == 'modificar')
                header('Location: '.PROCESO_FORMULARIO_MODIFICACION_ASIGNATURAS.$_GET["id"]);
            else if($_GET["opcion"] == 'borrar')
                header('Location: '.PROCESO_PREGUNTAR_BORRAR.$_GET["id"]);  
        }

        public function formularioAlta(){
            $this->vista = VISTA_FORMULARIO_ALTA_ASIGNATURAS;
        }
        public function anadirAsignatura() {
            $resultado = $this->modelo->anadirAsignatura();
            header('Location: '.PROCESO_RESULTADO_ANADIR_ASIGNATURAS.$resultado);
        }
        public function resultadoAnadirAsignatura(){
            $this->vista = VISTA_RESULTADO_ANADIR_ASIGNATURAS;
        }
        
        public function formularioModificar(){
            $this->vista = VISTA_FORMULARIO_MODIFICAR_ASIGNATURAS;
            return $this->modelo->consultaNombreColor();
        }
        public function modificarAsignatura(){
            $resultado = $this->modelo->modificarAsignatura();
            header('Location: '.PROCESO_RESULTADO_MODIFICAR_ASIGNATURAS.$resultado);
        }
        public function resultadoModificarAsignatura(){
            $this->vista = VISTA_RESULTADO_MODIFICAR_ASIGNATURAS;
        }

        public function preguntarBorrar(){
            $this->vista = VISTA_PREGUNTAR_BORRADO_ASIGNATURAS;
        }
        public function borrarAsignatura(){
            $resultado = $this->modelo->borrarAsignatura();
            header('Location: '.PROCESO_RESULTADO_BORRAR_ASIGNATURAS.$resultado);
        }
        public function resultadoBorrarAsignatura(){
            $this->vista = VISTA_RESULTADO_BORRAR_ASIGNATURAS;
        }
    }
?>