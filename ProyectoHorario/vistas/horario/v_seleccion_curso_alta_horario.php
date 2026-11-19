<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Alta horario de un curso</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a href="<?php echo PROCESO_FORMULARIO_INICIO_SESION ?>">Usuarios</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <h2><?php if(isset($_SESSION["usuario"])) echo 'Inición sesiada: <i><u>'.$_SESSION["usuario"].'</u></i>'; ?></h2>
    <h1>ALTA</h1>
    <h2>Selecciona el curso: </h2>
    <form action="./index.php" class="formSeleccionCurso" method="GET">
        <!-- No puedo poner parámetros en la URL porque se sobreescribirán
         con los que se mande por submit (el select) -->
        <select class="desplegableForm" name="curso">
            <?php 
                foreach($datos as $fila)
                    echo '<option value="'.$fila["idCurso"].'">'.$fila["nombre"].'</option>';
            ?>
        </select><br>
        <input type="text" name="iteradorDias" value="0" hidden>
        <input type="text" name="controlador" value="C_Horario" hidden>
        <input type="text" name="metodo" value="datosHorarioAlta" hidden>
        <input type="submit">
    </form>
</body>
</html>