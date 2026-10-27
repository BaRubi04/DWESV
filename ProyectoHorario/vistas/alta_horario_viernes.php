<?php
    require '../controlador/controlador.php';
    $objHorario = new Horario();
    $fila = $objHorario->nombreCurso($_POST["curso"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Alta horario</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a>Horario</a>
    </nav>
    <h1>Alta horario</h1>    
    <form action="horario_completo.php" method="POST">
        <h2><?php echo $fila['nombre']; ?></h2>
        <?php echo '<input name="curso"  value="'.$_POST["curso"].'" hidden>'; ?>
        <h3>Viernes</h3>
        <p id="textoEmpujado">(Asignatura)</p>
        <label>Hora 1:</label>
        <select name="asignaturaHora1">
            <?php $objHorario->listadoAsignaturas($_POST["curso"]); ?>
        </select>
        <br>
        <label>Hora 2:</label>
        <select name="asignaturaHora2">
            <?php $objHorario->listadoAsignaturas($_POST["curso"]); ?>
        </select>
        <br>
        <label>Hora 3:</label>
        <select name="asignaturaHora3">
            <?php $objHorario->listadoAsignaturas($_POST["curso"]); ?>
        </select>
        <br>
        <label>Hora 4:</label>
        <select name="asignaturaHora4">
            <?php $objHorario->listadoAsignaturas($_POST["curso"]); ?>
        </select>
        <br>
        <label>Hora 5:</label>
        <select name="asignaturaHora5">
            <?php $objHorario->listadoAsignaturas($_POST["curso"]); ?>
        </select>
        <br>
        <label>Hora 6:</label>
        <select name="asignaturaHora6">
            <?php $objHorario->listadoAsignaturas($_POST["curso"]); ?>
        </select>
        <br>
        <label>Hora 7:</label>
        <select name="asignaturaHora7">
            <?php $objHorario->listadoAsignaturas($_POST["curso"]); ?>
        </select>
        <br>
        <input type="submit">
    </form>
</body>
</html>