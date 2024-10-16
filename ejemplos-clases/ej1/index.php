<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("Coche.inc.php");
    $coche = new Coche();
    $coche->mover(5,7);
    echo $coche->getPosicion();
    ?>
</body>
</html>