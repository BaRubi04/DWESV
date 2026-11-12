<?php
    require_once "../controladores/'".$_GET["controlador"]."'.php"; 
    $objC = new $_GET["controlador"].();
    $datos = $objC->$_GET["metodo"]();
    include $objC->vista;
?>