<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Borrar un curso</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <h1>BORRAR</h1>
    <h2>Selecciona el curso: </h2>
    <form action="./index.php" method="GET">
        <!-- No puedo poner parámetros en la URL porque se sobreescribirán
         con los que se mande por submit (el select) -->
        <select id="desplegableCursos" name="curso">
            <?php 
                foreach($datos as $fila)
                    echo '<option value="'.$fila["idCurso"].'">'.$fila["nombre"].'</option>';
            ?>
        </select><br>
        <input type="text" name="controlador" value="C_Horario" hidden>
        <input type="text" name="metodo" value="borrarHorario" hidden>
        <input type="submit">
    </form>
</body>
</html>