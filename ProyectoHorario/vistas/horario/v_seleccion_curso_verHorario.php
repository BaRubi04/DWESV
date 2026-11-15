<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vistas/horario/estilos.css">
    <title>Seleccion Curso</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a href="./v_control_horario.html">Horario</a>
    </nav>
    <h1>Selecciona el curso: </h1>
    <form action="../procesos/index.php?controlador=C_Horario&metodo=visualizarHorario" method="GET">
        <select id="desplegableCursos" name="curso">
            <?php 
                foreach($datos as $fila)
                    echo '<option value="'.$fila["idCurso"].'">'.$fila["nombre"].'</option>';
            ?>
        </select><br>
        <input type="submit">
    </form>
</body>
</html>