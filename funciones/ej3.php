<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function multiplicar(&$numero){
    $numero*2;
    return $numero;
       
      }
    echo multiplicar("");
    ?>
</body>
</html>