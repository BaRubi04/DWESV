<?php
require '../otros/configdb.php';
class Horario{
    
    public $conexion;
    public $arrayDias=['Lunes','Martes','Miércoles','Jueves','Viernes'];
    function __construct(){
        global $SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS;
        $this->conexion = new mysqli($SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS);
    }

    public function listadoCursos(){
        $consulta = "select * from cursos;";
        $resultado = $this->conexion->query($consulta);

        if (!$resultado) 
            echo '<h1>Error, no hay cursos</h1>';
        else 
            while ($fila = $resultado->fetch_array())
                echo '<option value="'.$fila['idCurso'].'">'.$fila['nombre'].'</option>';
    }

    public function nombreCurso($idCurso){
        $consulta = "select * from cursos where idCurso = $idCurso;";
        $resultado = $this->conexion->query($consulta);
        $fila = $resultado->fetch_array();
        return $fila;
    }
    
    public function listadoAsignaturas($idCurso){
        $consulta = "select * from asignaturas inner join `asignaturas-cursos` on asignaturas.idAsignatura = `asignaturas-cursos`.idAsignatura where idCurso = '$idCurso'";
        $resultado = $this->conexion->query($consulta);
        if (!$resultado) 
            echo '<h1>Error, no hay asignaturas</h1>';
        else 
            while ($fila = $resultado->fetch_array())
                echo '<option value="'.$fila['idAsignatura'].'">'.$fila['nombre'].'</option>';
    }

    public function insertarClasesDia($dia,$idCurso,$idAsignatura){
        //A dia no le pongo los dos puntos porque lo que le venga ya será un caracter
        $consulta = "insert into horario values 
                        ('$dia',1,'.$idCurso.','.$idProfesor.','.$idAsignatura.'),
                        ('$dia',2,'.$idCurso.','.$idProfesor.','.$idAsignatura.'),
                        ('$dia',3,'.$idCurso.','.$idProfesor.','.$idAsignatura.'),
                        ('$dia',4,'.$idCurso.','.$idProfesor.','.$idAsignatura.'),
                        ('$dia',5,'.$idCurso.','.$idProfesor.','.$idAsignatura.'),
                        ('$dia',6,'.$idCurso.','.$idProfesor.','.$idAsignatura.'),
                        ('$dia',7,'.$idCurso.','.$idProfesor.','.$idAsignatura.')
                        ;";
        $resultado = $this->conexion->query($consulta);
        if($resultado)
            return 'positivo';
        else 
            return 'negativo';
    }
}