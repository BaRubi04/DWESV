<?php //Las declaraciones de arrays van puestas al principio para no obstruir el código HTML
    $horario = array(1 => array('l' => "IPP2", 'm'=> "DWENC", 'x' => "IPP2", 'j' => "DWESV", 'v' => "OPT2I"),
                     2 => array('l' => "DWESV", 'm'=> "DWENC", 'x' => "DWENC", 'j' => "DWESV", 'v' => "OPT2A"),
                     3 => array('l' => "DWESV", 'm'=> "DWESV", 'x' => "DWENC", 'j' => "DWESV", 'v' => "DASP"),
                     4 => array('l' => "PIMOD", 'm'=> "DWESV", 'x' => "DWESV", 'j' => "SASP", 'v' => "DWESV"),
                     5 => array('l' => "DEAPW", 'm'=> "PIMOD", 'x' => "DEAPW", 'j' => "OPT1", 'v' => "DWESV"),
                     6 => array('l' => "DWENC", 'm'=> "DEAPW", 'x' => "DEAPW", 'j' => "IPP2", 'v' => "TUTO"),
                     7 => array('l' => "DWENC", 'm'=> "", 'x' => "", 'j' => "", 'v' => ""));
    // El primer array de horario es numérico mientras que los otros son asociativos 

    $horas = array(1 => "08:15 - 09:10", //Para evitar complicar el código, hago que empiece en 1 directamente
                   2 => "09:10 - 10:05",
                   3 => "10:05 - 11:00",
                   4 => "11:30 - 12:25",
                   5 => "12:25 - 13:20",
                   6 => "13:20 - 14:15",
                   7 => "14:15 - 15:00");

    $fondo = array(//Otro array asociativo
                    'IPP2' => "#8ED4E8",
                    'DWESV' => "#977edb",
                    'DWENC' => "#e88eb1",
                    'PIMOD' => "#272585",
                    'DEAPW' => "#4de0a8",
                    'SASP' => "#cce445",
                    'DASP' => "#a6df23",
                    'OPT2I' => "#e46565",
                    'OPT2A' => "#c91515",
                    'TUTO' => "#57010ac2",
                    'OPT1' => "#9c6767",
                    '' => "#ffffff");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilohorario.css" rel="stylesheet"/>
        <title>Horario 2DAW Arrays Asociativos incluyendo horas</title>
    </head>
    <body>
        <h1>HORARIO DEL CURSO 2DAW 26-27</h1>
        <table>
            <tr>
                <td id="vacio"></td><!--vacio-->
                <th class="dias">Lunes</th>
                <th class="dias">Martes</th>
                <th class="dias">Miércoles</th>
                <th class="dias">Jueves</th>
                <th class="dias">Viernes</th>
            </tr>
            <tr>
                <?php
                    $i = 1;
                    foreach($horario as $dia){
                        echo '<tr>';
                        echo '<th>'.$horas[$i].'</th>';
                        foreach($dia as $asignatura)
                            echo '<td style = "background-color: '.$fondo[$asignatura].'">'.$asignatura.'</td>'; 
                        //$fondo[$asignatura] devuelve el contenido del índice de fondo (el color), por eso no puedo poner fondo a secas (devolvería solo el índice).     
                        echo '</tr>';
                        $i++;
                    }
                ?>
        </table>
    </body>
</html>