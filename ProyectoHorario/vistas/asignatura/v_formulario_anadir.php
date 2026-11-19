<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Formulario Alta Asignatura</title>
</head>
<body>
    <nav>
        <a href="<?php echo PROCESO_LISTADO_ASIGNATURAS ?>">Asignaturas</a>
        <a href="<?php echo PROCESO_FORMULARIO_INICIO_SESION ?>">Usuarios</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <h1>Añadir asignatura</h1>
    <form class="formMediano" action="<?php echo PROCESO_ALTA_ASIGNATURAS ?>" method="POST">
        <div>
            <label class="labelsFlotantes" for="nombre">Asignatura: </label><input class="inputForm" type="text" name="nombre">
            <label class="labelsFlotantes" for="color">Color: </label><input class="inputForm" type="text" name="color">
            <label class="labelsFlotantes" for="profesor">Profesor: </label><input class="inputForm" type="text" name="profesor">
            <input type="submit">
        </div>
    </form>
</body>
</html>