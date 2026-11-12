<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vistas/horario/estilos.css">
    <title>Alta horario</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a>Horario</a>
    </nav>
    <h1>Alta horario</h1>
    <table> 
        <tr>
            <td></td>
            <td><h2>Lunes</h2></td>
            <td><h2>Martes</h2></td>
            <td><h2>Miércoles</h2></td>
            <td><h2>Jueves</h2></td>
            <td><h2>Viernes</h2></td>    
        </tr>
    <?php
        for($i = 0; $i < 5; $i++){//filas
            //echo '<td>'.$dia[0][$i]["hora"].'</td>';//horas del día (cogemos lunes por ejemplo, es meramente visual)
            for($j = 0; $j < 4; $j++){//columnas
                //echo '<td>'.$dia[$i][$j][].'</td>';
            }
        }
    ?>
    </table>
</body>
</html>