<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
        <title>Listado Asignaturas</title>
    </head>
    <body>
        <nav>
            <a href="<?php echo PROCESO_LISTADO_ASIGNATURAS ?>">Asignaturas</a>
            <a href="<?php echo PROCESO_FORMULARIO_INICIO_SESION ?>">Usuarios</a>
            <a href="<?php echo PROCESO_CONTROL_HORARIO; ?>">Horario</a>
        </nav>
        <h1>Listado asignaturas</h1>
        <div class="cajaMolona">
            <?php
                foreach($datos as $fila){
                    echo '<p class="parrafoListadoAsignaturas">'.$fila['idAsignatura'].', '.$fila['nombre'].', '.$fila['color'].'</p>';
                    echo '<a class="botonMolon botonIconoListadoAsignaturas" href="'.PROCESO_CONTROL_ASIGNATURAS.$fila['idAsignatura'].'&opcion=borrar">🗑️</a>';
                    echo '<a class="botonMolon botonIconoListadoAsignaturas" href="'.PROCESO_CONTROL_ASIGNATURAS.$fila['idAsignatura'].'&opcion=modificar">🛠️</a>';
                }
            ?>
        </div>
        <a class="botonMolon" href="<?php echo PROCESO_FORMULARIO_ALTA_ASIGNATURAS ?>" target="_blank">Añadir asignatura</a>
    </body>
</html>