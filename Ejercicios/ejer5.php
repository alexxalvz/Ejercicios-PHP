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
     $articulos=array(
        array(1,"Raton",49.99),
        array(2,"Teclado",100),
      );
    
  
    foreach($articulos as $articulo) {  
        echo"<tr>";
        echo "<td>".$articulo[1]."</td>";
        echo "<td>".$articulo[2]."</td>";
        echo "</tr>";
    }
    
    ?>
    </table>
</body>
</html>