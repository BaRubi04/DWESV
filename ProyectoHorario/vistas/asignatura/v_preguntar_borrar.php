<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Borrado Asignatura</title>
</head>
<body>
    <nav>
        <a href="<?php echo PROCESO_LISTADO_ASIGNATURAS ?>">Asignaturas</a>
        <a href="<?php echo PROCESO_FORMULARIO_INICIO_SESION ?>">Usuarios</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <h1>Página de borrado</h1>
    <div class="cajaMolona">
        <a class="botonMolon" href="<?php echo PROCESO_BORRAR_ASIGNATURAS.$_GET["id"].'&borrar=si'?>"><h3>BORRAR</h3></a>
        <a class="botonMolon" href="<?php echo PROCESO_LISTADO_ASIGNATURAS; ?>"><h3>NO BORRAR</h3></a><br>
    </div>
</body>
</html>