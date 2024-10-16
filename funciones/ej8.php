<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Primo</title>
</head>
<body>
    <?php
    $numero = 13;

    
    function esPrimo($numero){

    if(($numero 
    ))
       
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            // No es primo :(
            return false;

        }

    }

    // Es primo :)
    return true;
}
    
    ?>
</body>
</html>