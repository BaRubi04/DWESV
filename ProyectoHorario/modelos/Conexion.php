<?php
    require_once CONFIGDB;
    class Conexion{
        protected $conexion;
        function __construct(){
            $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASEÑA, BASEDEDATOS);
        }
    }
?>