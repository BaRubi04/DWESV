<?php
    require '../../otros/configdb.php';
    class M_Horario{

        private $conexion;
        function __construct(){
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
        }
         
        public function anadirDia(){

            try {
                $this->conexion->query("START TRANSACTION");
                
                //hora 1
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora1"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);//fila con el profesor
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();//saca la fila a un array

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('L', 1, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora1"].");";
                $this->conexion->query($consulta);

                //hora 2
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora2"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('L', 2, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora2"].");";
                $this->conexion->query($consulta);

                //hora 3
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora3"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('L', 3, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora3"].");";
                $this->conexion->query($consulta);

                //hora 4
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora4"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('L', 4, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora4"].");";
                $this->conexion->query($consulta);

                //hora 5
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora5"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('L', 5, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora5"].");";
                $this->conexion->query($consulta);

                //hora 6
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora6"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('L', 6, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora6"].");";
                $this->conexion->query($consulta);
                //hora 7
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora7"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('L', 7, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora7"].");";
                $this->conexion->query($consulta);

                $this->conexion->query("COMMIT");           
            } catch (Exception $e) {
                $this->conexion->query("ROLLBACK");
                throw $e;
            }
        }
    }
?>