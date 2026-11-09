<?php
    require '../otros/configdb.php';
    class M_Curso{

        private $conexion;
        function __construct(){
            global SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS;
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
        }
         
        public function listadoCursos(){
            $consulta = "select * from cursos;";
            return $this->conexion->query($consulta);
        }

        public function nombreCurso($idCurso){
            $consulta = "select * from cursos where idCurso = $idCurso;";
            $resultado = $this->conexion->query($consulta);
            return $resultado->fetch_array();
        }

    }
?>