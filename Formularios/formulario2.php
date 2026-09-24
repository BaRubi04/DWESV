<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario Profesores 1DAW</title>
    </head>
    <body>
        <form action="resultados2.php" method="GET"> 
            
            <!--<label for="isa">Isa</label> <input type="checkbox" id="isa" name="profesores[Isa]"> <br>
            <label for="paco">Paco</label> <input type="checkbox" id="paco" name="profesores[Paco]"> <br>
            <label for="alberto">Alberto</label> <input type="checkbox" id="alberto" name="profesores[Alberto]"> <br>-->

            <label for="isa">Isa</label> <input type="checkbox" id="isa" name="profesores[]" value="isa"> <br>
            <label for="paco">Paco</label> <input type="checkbox" id="paco" name="profesores[]" value="paco"> <br>
            <label for="alberto">Alberto</label> <input type="checkbox" id="alberto" name="profesores[]" value="alberto"> <br>

            <br><br>

            <label for="horas">Horas</label> <input type="text" id="horas" name="horas"> <br>    

            <label for="lenguajemarcas">Lenguaje de Marcas</label> <input type="radio" id="lenguajemarcas" name="asignatura" value="lenguajemarcas"> <br>
            <label for="programacion">Programacion</label> <input type="radio" id="programacion" name="asignatura" value="programacion"> <br>
            <label for="basedatos">Bases de Datos</label> <input type="radio" id="basedatos" name="asignatura" value="basedatos"> <br>
            
            <label for="info">Informacion</label> <input type="textarea" id="info" name="info"> <br>

            <input type="submit">
        </form>
    </body>
</html>