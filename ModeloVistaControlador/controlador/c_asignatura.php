<?php 
require '../otros/configdb.php';
class Asignatura{
    
    public $conexion;

    function __construct(){
        global $SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS;
        $this->conexion = new mysqli($SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS);
    }

    public function listado() {
        $consulta = "select * from asignatura";
        $resultado = $this->conexion->query($consulta);

        if (!$resultado) 
            echo '<h1>Error, no hay filas</h1>';
        else 
            while ($fila = $resultado->fetch_array()){ 
                echo '<p>'.$fila['idAsignatura'].', '.$fila['nombre'].', '.$fila['color'].'</p>';
                echo '<a href="../otros/control.php?id='.$fila['idAsignatura'].'&opcion=borrar">B</a> - - -';
                echo '<a href="../otros/control.php?id='.$fila['idAsignatura'].'&opcion=modificar">M</a>';
            }
    }

    public function anadir($nombre,$color) {
        $consulta = "insert into asignatura(nombre,color) values ('$nombre','$color');";
        $resultado = $this->conexion->query($consulta);
        if($resultado)
            return 'positivo';
        else 
            return 'negativo';
    }

    public function consultaNombreColor($id) {//para sacar nombre y color (que no se envían en el href del <a>)
        $consulta = "select * from asignatura where idAsignatura = '$id';";
        $resultado = $this->conexion->query($consulta); 
        $fila = $resultado->fetch_array();
        return $fila;
    }

    public function modificar($id,$nombre,$color){
        $consulta = "update asignatura set nombre = '$nombre', color = '$color' where idAsignatura = $id;";
        $resultado = $this->conexion->query($consulta);
        if($resultado)
            return 'positivo';
        else 
            return 'negativo';
    }

    public function borrar($id){
        $consulta = "delete from asignatura where idAsignatura = '$id';";
        echo $consulta;
        $resultado = $this->conexion->query($consulta);
        if($resultado)
            return 'positivo';
        else 
            return 'negativo';
    }
}
?>