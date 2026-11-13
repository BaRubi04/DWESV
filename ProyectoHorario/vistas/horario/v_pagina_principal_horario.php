<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vistas/horario/estilos.css">
    <title>Alta horario</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a href="../procesos/index.php?controlador=C_Horario&metodo=visualizarHorario&curso=1">Horario</a>
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
        $dias = $objC->dias;
        for ($hora = 1; $hora <= 7; $hora++) {
            echo '<tr>';
            echo '<td>' . $hora . '</td>';
            foreach ($dias as $dia) {
                $celda = $datos[$dia][$hora];
                echo '<td style="background-color: ' . $celda["color"] . ';">' . $celda["nombre"] . '</td>';
            }
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>