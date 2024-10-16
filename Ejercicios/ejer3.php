<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=0;
    $numeros=array(0,1,2,3,4);
    $producto=1;

    for ($a = 0; $a < count($numeros); $a++) {
    $producto *= $numeros[ $a ];
   
       

    }
    echo" <p>La multiplicacion es: $producto </p>" ;
    ?>
</body>
</html>