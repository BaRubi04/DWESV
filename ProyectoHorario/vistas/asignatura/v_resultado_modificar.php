<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Resultado Modificar asignatura</title>
</head>
<body>
    <nav>
        <a href="<?php echo PROCESO_LISTADO_ASIGNATURAS ?>">Asignaturas</a>
        <a href="<?php echo PROCESO_FORMULARIO_INICIO_SESION ?>">Usuarios</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <div class="cajaMolona">
        <h1><?php if($_GET["resultado"]) echo 'Modificación exitosa'; else echo 'Modificación fallida'; ?></h1>
        <a href="<?php echo PROCESO_LISTADO_ASIGNATURAS; ?>">VOLVER</a>
    </div>
</body>
</html>