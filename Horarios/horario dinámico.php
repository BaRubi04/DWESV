<?php 
    /*$array = ["IPP2","DWENC","IPP2","DWESV","OPT2I"],
               ["DWESV","DWENC","DWENC","DWESV","OPT2A"],
               ["DWESV","DWESV","DWENC","DWESV","DASP"],
               ["PIMOD","DWESV","DWESV","SASP","DWESV"],
               ["DEAPW","PIMOD","DEAPW","OPT1","DWESV"],
               ["DWENC","DEAPW","DEAPW","IPP2","TUTO"],
               ["DWENC","","","",""];
    */
    $array[]['l'] = ["IPP2","DWESV","DWESV","PIMOD","DEAPW","DWENC","DWENC"];
    $array[]['m'] = ["DWENC","DWENC","DWESV","DWESV","PIMOD","DEAPW",""];
    $array[]['x'] = ["IPP2","DWENC","DWENC","DWESV","DEAPW","DEAPW",""];
    $array[]['j'] = ["DWESV","DWESV","DWESV","SASP","OPT1","IPP2",""];
    $array[]['v'] = ["OPT2I","OPT2A","DASP","DWESV","DWESV","TUTO",""];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilohorario.css" rel="stylesheet"/>
    <title>horario</title>
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
            <th>
                08:15 - 09:10
            </th>
            <?php
                foreach($array[0][] => $clase)
                    echo '<td>'.$clase.'</td>';
            ?>
        </tr>
        <tr>
            <th>
                09:10 - 10:05
            </th>
            <?php
                foreach($array[1] => $clase)
                    echo '<td>'.$clase.'</td>';
            ?>
        </tr>
        <tr>
            <th>
                10:05 - 11:00
            </th>
            <?php
                foreach($array[2] => $clase)
                    echo '<td>'.$clase.'</td>';
            ?>
        </tr>
        <tr>
            <th>
                11:00 - 11:30
            </th>
            <th colspan="5">
                RECREO
            </th>
        </tr>
        <tr>
            <th>
                11:30 - 12:25
            </th>
            <?php
                foreach($array[3] => $clase)
                    echo '<td>'.$clase.'</td>';
            ?>
        </tr>
        <tr>
            <th>
                12:25 - 13:20
            </th>
            <?php
                foreach($array[4] => $clase)
                    echo '<td>'.$clase.'</td>';
            ?>
        </tr>
        <tr>
            <th>
                13:20 - 14:15
            </th>
            <?php
                foreach($array[5] => $clase)
                    echo '<td>'.$clase.'</td>';
            ?>
        </tr>
        <tr>
            <th>
                14:15 - 15:00
            </th>
            <?php
                foreach($array[6] => $clase)
                    echo '<td>'.$clase.'</td>';
            ?>
        </tr>
    </table>
</body>
</html>