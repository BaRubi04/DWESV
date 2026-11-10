<?php
    require_once '../../otros/configdb.php';
    class M_Asignatura{
        
        public $conexion;
        private $modelo;
        function __construct(){
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
        }

        public function listadoAsignaturas() {
            $consulta = "select * from asignaturas";
            $resultado = $this->conexion->query($consulta);
            return $resultado->fetch_array();
        }

        public function anadir() {
            $consulta = "insert into asignaturas(nombre,color) values ('".$_POST["nombre"]."','".$_POST["color"]."');";
            $resultado = $this->conexion->query($consulta);
        }

        public function consultaNombreColor() {
            $consulta = "select * from asignatura where idAsignatura = '".$_GET["curso"]."';";//tiene el id
            $resultado = $this->conexion->query($consulta); 
            $fila = $resultado->fetch_array();
            return $fila;
        }

        public function modificar(){
            $consulta = "update asignaturas set nombre = '".$_POST["nombre"]."', color = '".$_POST["color"]."' where idAsignatura = ".$_POST["id"].";";
            $resultado = $this->conexion->query($consulta);
        }

        public function borrar(){
            $consulta = "delete from asignaturas where idAsignatura = '".$_GET["curso"]."';";//tiene el id
            $resultado = $this->conexion->query($consulta);
        }
    }
?>