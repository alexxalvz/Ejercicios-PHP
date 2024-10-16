<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $monedas=array("Estados Unidos" => "USD" ,
    "España"=> "EUR",
    "Reinounido"=> "GBP",
    "Emiratos"=> "AED") ;
    


   

    foreach($monedas as $pais=> $moneda) {
         echo "<li>Moneda de $pais:$moneda</li>";


    }
         

    ?>
</body>
</html>