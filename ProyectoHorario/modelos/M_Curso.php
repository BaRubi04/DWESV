<?php
    require_once CONFIGDB;
    class M_Curso{

        private $conexion;
        function __construct(){
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
        }
         
        public function listadoCursosSinHorario(){
            $consulta = "select * from cursos c where not exists (select * from horario h where h.idCurso = c.idCurso);";
            return $this->conexion->query($consulta);
        }

        public function listadoCursosConHorario(){
            $consulta = "select DISTINCT c.idCurso, c.nombre from cursos as c inner join horario as h on c.idCurso = h.idCurso;";
            return $this->conexion->query($consulta);
        }

        public function nombreCurso(){
            $consulta = "select * from cursos where idCurso = ".$_GET["curso"].";";
            $resultado = $this->conexion->query($consulta);
            return $resultado->fetch_array();
        }

    }
?>