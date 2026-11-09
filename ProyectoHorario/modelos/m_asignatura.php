<?php
    require '../otros/configdb.php';
    class M_Asignatura{
        
        public $conexion;
        private $modelo;
        function __construct(){
            global SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS;
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
        }

        public function listado() {
            $consulta = "select * from asignatura";
            $resultado = $this->conexion->query($consulta);
            return $resultado->fetch_array();
        }

        public function anadir() {
            $consulta = "insert into asignatura(nombre,color) values ('.$_POST["nombre"].','.$_POST["color"].');";
            $resultado = $this->conexion->query($consulta);
        }

        public function consultaNombreColor() {
            $consulta = "select * from asignatura where idAsignatura = '$_GET["id"]';";
            $resultado = $this->conexion->query($consulta); 
            $fila = $resultado->fetch_array();
            return $fila;
        }

        public function modificar(){
            $consulta = "update asignatura set nombre = '$_POST["nombre"]', color = '$_POST["color"]' where idAsignatura = $_POST["id"];";
            $resultado = $this->conexion->query($consulta);
        }

        public function borrar(){
            $consulta = "delete from asignatura where idAsignatura = '$_GET["id"]';";
            $resultado = $this->conexion->query($consulta);
        }
    }
?>