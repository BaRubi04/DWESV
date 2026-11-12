<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require_once "../controladores/".$_GET["controlador"].".php";

    $controlador = $_GET["controlador"];
    $metodo = $_GET["metodo"];

    $objC = new $controlador();
    $datos = $objC->$metodo();
    
    if(isset($objC->vista))
        include $objC->vista;
?>