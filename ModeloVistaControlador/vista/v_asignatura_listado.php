<?php 
    require '../controlador/c_asignatura.php';
?>
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
                $objAsignatura = new Asignatura(); 
                $objAsignatura->listado();
            ?>
        </div>
        <a href="formulario_anadir.html" target="_blank">
            <button>Añadir asignatura</button>
        </a>
    </body>
</html>