<?php
    require_once CONFIGDB;
    require_once CONEXION;
    class M_Asignatura extends Conexion{
        
        public function listarAsignaturas() {
            $consulta = "select * from asignaturas";
            return $this->conexion->query($consulta);
        }

        public function anadirAsignatura() {
            $consulta = "select * from profesores where nombre = '".$_POST["profesor"]."'";
            if($resultado = $this->conexion->query($consulta)){ // Si result devuelve true (existe)
                $profesor = $resultado->fetch_assoc();
                $consulta = "insert into asignaturas(nombre,color,idProfesor) values ('".$_POST["nombre"]."','".$_POST["color"]."','".$profesor["idProfesor"]."');";
                return $this->conexion->query($consulta);
            }
            return $resultado;
        }

        public function consultaNombreColor() {
            $consulta = "select * from asignaturas where idAsignatura = '".$_GET["id"]."';";
            $resultado = $this->conexion->query($consulta); 
            return $resultado->fetch_array();
        }

        public function modificarAsignatura(){
            $consulta = "update asignaturas set nombre = '".$_POST["nombre"]."', color = '".$_POST["color"]."' where idAsignatura = ".$_POST["idAsignatura"].";";
            return $this->conexion->query($consulta);
        }

        public function borrarAsignatura(){
            $consulta = "delete from asignaturas where idAsignatura = '".$_GET["id"]."';";
            return $this->conexion->query($consulta);
        }
    }
?>