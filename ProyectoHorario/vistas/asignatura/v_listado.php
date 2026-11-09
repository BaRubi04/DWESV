<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo_vista.css">
        <title>Formulario Profesores 1DAW</title>
    </head>
    <body>
        <h1>Listado asignaturas</h1>
        <div>
            <?php

                foreach($filas as $fila){
                    echo '<p>'.$fila['idAsignatura'].', '.$fila['nombre'].', '.$fila['color'].'</p>';
                    echo '<a href="../otros/control.php?id='.$fila['idAsignatura'].'&opcion=borrar">B</a> - - -';
                    echo '<a href="../otros/control.php?id='.$fila['idAsignatura'].'&opcion=modificar">M</a>';
                }
            ?>
        </div>
        <a href="formulario_anadir.html" target="_blank">
            <button>Añadir asignatura</button>
        </a>
    </body>
</html>