<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $productos=array(
       array(1,"Raton",49.99),
       array(2,"Teclado",89.99),
       array(3,"Disco Duro",76));

       echo $productos[0][1];

    foreach($productos as $producto){
        echo "<p>".$producto[0]."</p>";

    }

    ?>
</body>
</html>