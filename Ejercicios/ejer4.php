<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $elementos=array(1,"Hola",2,3,4);
    
    echo"<ol>";
   foreach($elementos as $element) {

    echo " <li>$element</li>";
   
       

    }
    echo"</ol> " ;
    ?>
</body>
</html>