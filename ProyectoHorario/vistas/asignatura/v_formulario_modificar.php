<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Formulario modificar</title>
</head>
<body>
    <nav>
        <a href="<?php echo PROCESO_LISTADO_ASIGNATURAS ?>">Asignaturas</a>
        <a href="<?php echo PROCESO_FORMULARIO_INICIO_SESION ?>">Usuarios</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <h1>Modificar asignaturas</h1>
    <form class="formMediano" action="<?php echo PROCESO_MODIFICAR_ASIGNATURAS; ?>" method="POST">
        <div>
            <input type="text" name="idAsignatura" value="<?php echo $_GET["id"]; ?>" hidden>
            <label class="labelsFlotantes" for="nombre">Asignatura: </label>   <input class="inputForm" type="text" name="nombre" value="<?php echo $datos["nombre"]; ?>">
            <label class="labelsFlotantes" for="color">Color: </label>   <input class="inputForm" type="text" name="color" value="<?php echo $datos["color"]; ?>">
            <br><br>
            <input type="submit">
        </div>
    </form>
</body>
</html>