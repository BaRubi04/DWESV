<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Alta horario</title>
</head>
<body>
    <nav>
        <a href="<?php echo PROCESO_LISTADO_ASIGNATURAS ?>">Asignaturas</a>
        <a href="<?php echo PROCESO_FORMULARIO_INICIO_SESION ?>">Usuarios</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <h2><?php if(isset($_SESSION["usuario"])) echo 'Inición sesiada: <i><u>'.$_SESSION["usuario"].'</u></i>'; ?></h2>
    <h1>Horario de <?php echo $objC->nombreCursoSeleccionado; ?></h1>
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
        for ($hora = 1; $hora <= 7; $hora++) {
            echo '<tr>';
            echo '<td>'.$hora.'</td>';
            foreach ($objC->dias as $dia) {
                $celda = $datos[$dia][$hora];
                echo '<td style="background-color:'.$celda["color"].';">'.$celda["nombre"].'</td>';
            }
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>