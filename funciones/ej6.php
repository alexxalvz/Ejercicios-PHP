<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar array</title>
</head>
<body>
    <?php
    
    $miArray = [5, 1, 80, 10, 7, 66, 100];
    
    echo "Antes de ordenar: $miArray";
    
    
    function OrdenarArray(&$array){
     
    
        $longitud = count($array);
        for ($i = 0; $i < $longitud; $i++) {
            for ($j = 0; $j < $longitud - 1; $j++) {
                if ($array[$j] < $array[$j + 1]) {
                    $temporal = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temporal;
                }
            }
        }
    }
    
   
    
    ?>
</body>
</html>