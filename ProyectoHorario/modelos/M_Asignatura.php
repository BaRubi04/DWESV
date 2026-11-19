<?php
    require_once CONFIGDB;
    require_once CONEXION;
    class M_Asignatura extends Conexion{
        
        public function listadoAsignaturas() {
            $consulta = "select * from asignaturas";
            return $this->conexion->query($consulta);
        }

        public function anadir() {
            $consulta = "insert into asignaturas(nombre,color) values ('".$_POST["nombre"]."','".$_POST["color"]."');";
            $resultado = $this->conexion->query($consulta);
        }

        public function consultaNombreColor() {
            $consulta = "select * from asignatura where idAsignatura = '".$_GET["curso"]."';";//tiene el id
            $resultado = $this->conexion->query($consulta); 
            return $resultado->fetch_array();
        }

        public function modificarAsignatura(){
            $consulta = "update asignaturas set nombre = '".$_POST["nombre"]."', color = '".$_POST["color"]."' where idAsignatura = ".$_POST["id"].";";
            $resultado = $this->conexion->query($consulta);
        }

        public function borrarAsignatura(){
            $consulta = "delete from asignaturas where idAsignatura = '".$_GET["curso"]."';";//tiene el id
            $resultado = $this->conexion->query($consulta);
        }
    }
?>