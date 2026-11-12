<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once '../../controladores/c_horario.php'; 

    $objHorario = new C_Horario();
    $filas = $objHorario->visualizarHorario(); 
    $lunes = [];
    $martes = [];
    $miercoles = [];
    $jueves = [];
    $viernes = [];
    foreach($filas as $fila){
        switch($fila["dia"]){
            case 'L':
                $lunes[] = $fila;
                break;
            case 'M':
                $martes[] = $fila;
                break;
            case 'X':
                $miercoles[] = $fila;
                break;
            case 'J':
                $jueves[] = $fila;
                break;
            case 'V':
                $viernes[] = $fila;
        }
    }
        
    $dia = [$lunes,$martes,$miercoles,$jueves,$viernes];
    $datos;
    for($i = 0; $i < 4; $i++){//filas
        for($j = 0; $j < 4; $j++){//columnas
        /*
            $datos = [
                "dia"     => "L",
                "hora"    => 1,
                "nombreAsignatura" => "PRO"
            ];
        */
        }
    }

    include $objHorario->vista;
?>