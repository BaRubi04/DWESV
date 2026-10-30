<?php
    require '../controladores/controlador.php';
    $objHorario = new Horario();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Seleccion Curso</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a>Horario</a>
    </nav>
    <h1>Selecciona el curso: </h1>
    <form action="alta_horario.php" method="GET">
        <select id="desplegableCursos" name="curso">
            <?php 
                $objHorario->listadoCursos();//meter echos con bucles aquí, en la vista
                echo '<input type="text" name="iteradorDias" value="0" hidden>';
            ?>
        </select><br>
        <br>
        <input type="submit">
    </form>
</body>
</html>