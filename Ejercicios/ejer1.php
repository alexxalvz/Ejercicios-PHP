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
    $suma=0;
   while($a<count($numeros)){
    echo"$numeros[$a] <br>";
    $suma+= $numeros[$a];
   $a++;
   }
   echo"La suma es:".$suma;
    ?>
</body>
</html>