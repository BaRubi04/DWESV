<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once "./controladores/".$_GET["controlador"].".php";
    require_once "./controladores/C_Inicio.php";

    if(isset($_GET["controlador"]) && isset($_GET["metodo"])){
        $controlador = $_GET["controlador"];
        $metodo = $_GET["metodo"];
    }
    else{
        $controlador = CONTROLADOR_BASE;
        $metodo = METODO_BASE;
    }
    
    $objC = new $controlador();
    $datos = $objC->$metodo();
    
    include "./vistas/".$objC->vista;
?>