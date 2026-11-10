<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../vistas/horario/estilos.css">
    <title>Alta horario</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a>Horario</a>
    </nav>
    <h1>Alta horario</h1>    
    <?php echo '<form action="../../procesos/horario/p_resolucion_alta_horario.php?iteradorDias='.$_GET["iteradorDias"].'&curso='.$_GET["curso"].'" method="POST">'; ?>
            <!-- 
                Recordatorio: $_GET y $_POST son superglobales, pero pierden su valor por cada nueva
                petición http (cambiar de página), por eso no hace falta pasarlos como parámetros en los métodos,
                pero sí hay que pasarlos explícitamente entre página y página.
            -->
        <h2><?php echo $nombreCursoSeleccionado; ?></h2>
        <h3><?php echo $dia; ?></h3>
        <?php //echo '<input name="iteradorDias" value="'.$_GET["iteradorDias"].'" hidden>'; ?>
        
        <p id="textoEmpujado">(Asignatura)</p>
        <label>Hora 1:</label>
        <select name="asignaturaHora1">
            <?php 
                foreach($filas as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label>Hora 2:</label>
        <select name="asignaturaHora2">
            <?php 
                foreach($filas as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label>Hora 3:</label>
        <select name="asignaturaHora3">
            <?php 
                foreach($filas as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label>Hora 4:</label>
        <select name="asignaturaHora4">
            <?php 
                foreach($filas as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label>Hora 5:</label>
        <select name="asignaturaHora5">
            <?php 
                foreach($filas as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label>Hora 6:</label>
        <select name="asignaturaHora6">
            <?php 
                foreach($filas as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label>Hora 7:</label>
        <select name="asignaturaHora7">
            <?php 
                foreach($filas as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <input type="submit">
    </form>
</body>
</html>