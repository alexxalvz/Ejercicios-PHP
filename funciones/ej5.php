<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuento</title>
</head>
<body>
    <?php
    function descuento($precio,$descuento=10){
    return $precio -$precio * ($descuento/100);

    }
    echo descuento(10,20);
    echo("<br>");
    echo descuento(20);
    
     
    
   ?>
    
</body>
</html>