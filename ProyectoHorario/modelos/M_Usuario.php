<?php
    require_once CONFIGDB;
    require_once CONEXION;
    class M_Usuario extends Conexion{
         
        public function inicioSesion(){
            $consulta = "select * from usuarios where correo = '".$_POST["correo"]."' and pw = '".$_POST["pw"]."' );";
            return $this->conexion->query($consulta);
        }

    }
?>