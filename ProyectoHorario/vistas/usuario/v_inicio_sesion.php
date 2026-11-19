<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Ver un horario</title>
</head>
<body>
    <nav>
        <a href="<?php echo PROCESO_LISTADO_ASIGNATURAS ?>">Asignaturas</a>
        <a href="<?php echo PROCESO_FORMULARIO_INICIO_SESION ?>">Sesión</a>
        <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
    </nav>
    <h2><?php if(isset($_SESSION["usuario"])) echo 'Inición sesiada: <i><u>'.$_SESSION["usuario"].'</u></i>'; ?></h2>
    <h1>INICIO DE SESIÓN</h1>
    <form action="<?php PROCESO_INICIO_SESION ?>" class="formMediano" method="POST">
        <label class="labelsFlotantes" for="nombre">Usuario: </label><input class="inputForm" type="text" name="nombre" minlength="5" maxlength="20" required pattern="[A-Za-z0-9]+" title="Entre 5 y 20 caracteres alfanuméricos">
        <!--<label class="labelsFlotantes" for="pw">Contraseña: </label><input class="inputForm" type="password" name="pw" minlength="5" maxlength="20" required pattern="[A-Za-z0-9]+" title="Entre 5 y 20 caracteres alfanuméricos">-->
        <label class="labelsFlotantes" for="pw">Contraseña: </label><input class="inputForm" type="text" name="pw">
        <input type="submit">
    </form>
    <a id="botonDestruirSesion" href="<?php echo PROCESO_DESTRUIR_SESION ?>">Destruir Sesión</a>
</body>
</html>