<?php
    require_once CONFIGDB;
    require_once CONEXION;
    class M_Usuario extends Conexion{
        public function iniciarSesion(){
            $consultaPDO = "select * from usuarios where nombre = :nombre and cont = :cont;";
            $resultadoPDO = $this->conexionPDO->prepare($consultaPDO);
            $fila = $resultadoPDO->execute(['nombre' => $_POST["nombre"], 'cont' => $_POST["pw"]]);
            if($fila = $resultadoPDO->fetch(PDO::FETCH_ASSOC)){
                session_start();
                $_SESSION["usuario"] = $fila["nombre"];
            }
        }
    }
?>