<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario Profesores 1DAW</title>
    </head>
    <body>
        <form action="formulario1.php" method="GET"> 
            
            <select name="profesores">
                <option value="1">Isa</option>    
                <option value="2">Paco</option>    
                <option value="3">Alberto</option>    
            </select>

            <br><br>

            <label for="horas">Horas</label> <input type="text" id="horas" name="horas"> <br>    

            <label for="lenguajemarcas">Lenguaje de Marcas</label> <input type="radio" id="lenguajemarcas" name="asignatura" value="lenguajemarcas"> <br>
            <label for="programacion">Programacion</label> <input type="radio" id="programacion" name="asignatura" value="programacion"> <br>
            <label for="basedatos">Bases de Datos</label> <input type="radio" id="basedatos" name="asignatura" value="basedatos"> <br>
            
            <label for="info">Informacion</label> <input type="textarea" id="info" name="info"> <br>

            <input type="submit">
        </form>
        <?php
            /*if(isset($_GET["asignatura"])){
                echo 'asignatura : '.$_GET["asignatura"].'<br>';
                echo 'asignatura2 : '.$_GET["asignatura2"];
            }*/
        ?>
    </body>
</html>