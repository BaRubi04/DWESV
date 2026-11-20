<?php
    require_once CONFIGDB;
    require_once CONEXION;
    class M_Usuario extends Conexion{
         
        public function iniciarSesion(){
            $consulta = "select * from usuarios where nombre = '".$_POST["nombre"]."' and cont = '".$_POST["pw"]."';";
            if($resultado = $this->conexion->query($consulta)){
                $fila = $resultado->fetch_assoc();
                session_start();
                $_SESSION["usuario"] = $fila["nombre"];
            }
        }
        public function iniciarSesionPDO(){
            $consultaPDO = "select * from usuarios where nombre = :nombre and cont = :cont;";
            $resultadoPDO = $conexionPDO->prepare($consultaPDO);
            if($resultadoPDO->execute(['nombre' => $_POST["nombre"], 'cont' => $_POST["pw"]])){
                $fila = $resultadoPDO->fetchAll(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION["usuario"] = $fila["nombre"];
            }
        }
    }
?>