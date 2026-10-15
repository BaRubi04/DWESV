<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilohorario.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <table>
        <?php
            $iterador = 1;
            $numOp;
            $factorial = 1;
            $concatenacion = "";
            while($iterador <= 10){
                echo "
                    <tr>
                        <th>$iterador</th>
                        <td>$factorial</td>
                        <td>$concatenacion</td>
                    </tr>
                ";
                $iterador++;
                for($numOp = $iterador - 1, $factorial = $iterador, $concatenacion = $iterador; $numOp >= 1; $numOp--){
                    $factorial = $factorial * $numOp;          
                    $concatenacion = $concatenacion."x".$numOp;
                }
            }
        ?>
    </table>
</body>
</html>