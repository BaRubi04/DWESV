<?php
    require_once CONFIGDB;
    class Conexion{
        protected $conexion;
        protected $conexionPDO;
        function __construct(){
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
            $this->conexionPDO = new PDO(SERVBD,USUARIO,CONTRASEÑA);
        }
    }
?>