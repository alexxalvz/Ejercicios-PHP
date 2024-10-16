<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function primo($n)
    {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    
    }
    $n = 7;
    $n2 = 8;
    
    echo "$n es primo? ". primo($n);
    echo "<br>";
    echo "$n2 es primo? ". primo($n2);


    
    ?>
</body>
</html>