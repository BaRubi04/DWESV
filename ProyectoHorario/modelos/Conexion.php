<?php
    require '../otros/configdb.php';
    class Conexion{
        public $conexion;
        function __construct(){
            global $SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS;
            $this->conexion = new mysqli($SERVIDOR, $USUARIO, $CONTRASEÑA, $BASEDEDATOS);
        }
        // public function query($consulta){return $this->conexion->query($consulta);}
    }
?>