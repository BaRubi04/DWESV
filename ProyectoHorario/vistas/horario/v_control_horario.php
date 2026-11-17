<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Control horario</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <h1>GESTIÓN DE HORARIOS</h1>
    <div class="cajaMolona">
        <h3><a href="<?php echo PROCESO_SELECCION_CURSO_VISUALIZAR_HORARIO; ?>">Visualizar el horario de un curso</a></h3>
        <h3><a href="<?php echo PROCESO_SELECCION_CURSO_ALTA_HORARIO; ?>">Alta de un horario</a></h3>
        <h3><a href="<?php echo PROCESO_SELECCION_CURSO_BORRAR_HORARIO; ?>">Borrar un horario</a></h3>
    </div>
</body>
</html>