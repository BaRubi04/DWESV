<?php
    require_once '../otros/configdb.php';
    class M_Horario{

        private $conexion;
        function __construct(){
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
        }
        
        public function listadoAsignaturasCurso(){
            $consulta = "select * from asignaturas inner join `asignaturas-cursos` on asignaturas.idAsignatura = `asignaturas-cursos`.idAsignatura where idCurso = '".$_GET["curso"]."'";
            return $this->conexion->query($consulta);
        }

        public function datosHorario(){
            $consulta = "select dia,hora,nombre,color from asignaturas inner join horario on asignaturas.idAsignatura = horario.idAsignatura where idCurso = '".$_GET["curso"]."'";
            return $this->conexion->query($consulta);
        }

        public function anadirDia(){

            $dia;
            switch($_GET["iteradorDias"]){//En la BD, el día es un char de 1, por ende hago lo siguiente:
                case 0:
                    $dia = 'L';
                    break;
                case 1:
                    $dia = 'M';
                    break;
                case 2:
                    $dia = 'X';
                    break;
                case 3:
                    $dia = 'J';
                    break;
                case 4:
                    $dia = 'V';
            }
            
            try {
                $this->conexion->query("START TRANSACTION");
                //Antes de hacer el insert, busca el profesor correspondiente a la asignatura
                /*
                    Curso se saca del GET porque procede del formulario de selección de curso (v_seleccion_curso.php),
                    formulario donde mando iteradorDias = 0 (Lunes). En la resolución del alta (p_resolucion_alta_horario.php),
                    dicho valor es retornado al proceso de alta por URL, así que debe ser GET. Debido a eso,
                    no puedo mandarlo como POST en la selección de curso, por lo que el curso es 
                    mandado también como GET junto al iterador de dias. 

                    No lo pongo en un bucle porque el nombre de los select de las horas es distinto en cada uno, y tendría
                    que cambiarlo en cada iteración, sería mucha molestia.
                    (Idea: poner los nombres de los select en un array)
                */
                //hora 1
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora1"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);//fila con el profesor
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();//saca la fila a un array

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('$dia', 1, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora1"].");";
                $this->conexion->query($consulta);

                //hora 2
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora2"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('$dia', 2, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora2"].");";
                $this->conexion->query($consulta);

                //hora 3
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora3"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('$dia', 3, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora3"].");";
                $this->conexion->query($consulta);

                //hora 4
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora4"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('$dia', 4, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora4"].");";
                $this->conexion->query($consulta);

                //hora 5
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora5"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('$dia', 5, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora5"].");";
                $this->conexion->query($consulta);

                //hora 6
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora6"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('$dia', 6, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora6"].");";
                $this->conexion->query($consulta);

                //hora 7
                $busquedaProfesor = "SELECT * FROM asignaturas where idAsignatura = ".$_POST["asignaturaHora7"].";";
                $resultadoFilaAsignatura = $this->conexion->query($busquedaProfesor);
                $filaAsignatura = $resultadoFilaAsignatura->fetch_array();

                $consulta = "INSERT INTO horario (dia, hora, idCurso, idProfesor, idAsignatura) VALUES ('$dia', 7, ".$_GET["curso"]." , ".$filaAsignatura["idProfesor"].", ".$_POST["asignaturaHora7"].");";
                $this->conexion->query($consulta);


                $this->conexion->query("COMMIT");           
            } catch (Exception $e) {
                $this->conexion->query("ROLLBACK");
                throw $e;
            }
        }
    }
?>