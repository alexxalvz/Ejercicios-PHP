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
 $strings=["Hola","Buenas",3,4];
 $frase="";

   do{
   $frase .= $strings[$a];
  $a++;
   }
    while ($a<count($strings));
       
        

    
echo"La frase es:".$frase;
    ?>
</body>
</html>