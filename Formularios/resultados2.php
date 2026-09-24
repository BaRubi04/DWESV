<?php
    /*foreach($_GET['profesores'] as $profe => $estado){
        echo $profe.': '.$estado.'<br>';
    }*/
    for($i = 0; $i < sizeof($_GET['profesores']); $i++)
        echo $_GET['profesores'][$i].'<br>';

    echo '<br>';
    echo 'Horas: '.$_GET['horas'].'<br>';
    
    if /*(isset($_GET['asignatura']))*/(!empty($_GET['asignatura']))
        echo 'Asignatura: '.$_GET['asignatura'].'<br>';
    else 
        echo '*Asignatura vacía*<br>';
    echo 'Informacion: '.$_GET['info'].'<br><br>';

    echo var_dump($_GET);
    echo '<br><br>';
    echo print_r($_GET);
?>