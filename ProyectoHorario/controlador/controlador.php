<?php
require '../otros/configdb.php';
class Horario{
    
    public $conexion;

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

    public function insertarClasesDia(){
        $consulta = "insert into asignatura(nombre,color) values ('.$nombre.','.$color.');";
        $resultado = $this->conexion->query($consulta);
        if($resultado)
            return 'positivo';
        else 
            return 'negativo';
    }
}