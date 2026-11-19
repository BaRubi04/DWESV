<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ESTILOS; ?>">
    <title>Alta horario</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a>Horario</a>
    </nav>
    <h2><?php if(isset($_SESSION["usuario"])) echo 'Inición sesiada: <i><u>'.$_SESSION["usuario"].'</u></i>'; ?></h2>
    <h1>Alta horario</h1>    
    <form action="<?php echo PROCESO_ANADIR_DIA.$_GET["iteradorDias"].'&curso='.$_GET["curso"]; ?>" id="formAlta" method="POST">
            <!-- 
                Recordatorio: $_GET y $_POST son superglobales, pero pierden su valor por cada nueva
                petición http (cambiar de página), por eso no hace falta pasarlos como parámetros en los métodos,
                pero sí hay que pasarlos explícitamente entre página y página.
            -->
        <h2><?php echo $objC->nombreCursoSeleccionado; ?></h2>
        <h3><?php echo $objC->arrayDias[$_GET["iteradorDias"]]; ?></h3>
        
        <p id="textoEmpujado">(Asignatura)</p>
        <label class="labelsAlta">Hora 1:</label>
        <select class="desplegableForm" name="asignaturaHora1">
            <?php 
                foreach($datos as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label class="labelsAlta">Hora 2:</label>
        <select class="desplegableForm" name="asignaturaHora2">
            <?php 
                foreach($datos as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label class="labelsAlta">Hora 3:</label>
        <select class="desplegableForm" name="asignaturaHora3">
            <?php 
                foreach($datos as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label class="labelsAlta">Hora 4:</label>
        <select class="desplegableForm" name="asignaturaHora4">
            <?php 
                foreach($datos as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label class="labelsAlta">Hora 5:</label>
        <select class="desplegableForm" name="asignaturaHora5">
            <?php 
                foreach($datos as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label class="labelsAlta">Hora 6:</label>
        <select class="desplegableForm" name="asignaturaHora6">
            <?php 
                foreach($datos as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <label class="labelsAlta">Hora 7:</label>
        <select class="desplegableForm" name="asignaturaHora7">
            <?php 
                foreach($datos as $fila)
                    echo '<option value='.$fila['idAsignatura'].'>'.$fila["nombre"].'</option>';
            ?>
        </select>
        <br>
        <input type="submit">
    </form>
</body>
</html>