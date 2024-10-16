<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
<tr><th>Nombre</th><th>Precio</th></tr>
    <?php
    $productos=array(
        array("id"=> 1, "name" => "Raton", "price"=> 49.99),
        array("id"=> 2,"name"=> "Teclado", "price"=>89.99),
        array("id"=> 3, "name" => "Disco Duro", "price"=>76));
   
    foreach($productos as $producto) {  
        echo"<tr>";
        echo "<td>".$producto[1]."</td>";
        echo "<td>".$producto[2]."</td>";
        echo "<td>".$producto[3]."</td>";
        echo "</tr>";
    }
    
    ?>
        </table>
</body>
</html>