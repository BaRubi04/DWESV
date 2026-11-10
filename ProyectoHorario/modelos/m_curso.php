<?php
    require_once '../../otros/configdb.php';
    class M_Curso{

        private $conexion;
        function __construct(){
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
        }
         
        public function listadoCursos(){
            $consulta = "select * from cursos;";
            return $this->conexion->query($consulta);
        }

        public function nombreCurso(){
            $consulta = "select * from cursos where idCurso = ".$_GET["curso"].";";
            $resultado = $this->conexion->query($consulta);
            return $resultado->fetch_array();
        }

    }
?>