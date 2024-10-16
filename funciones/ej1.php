<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function gastos($categoria,$unidades) { 

  switch ($categoria) {
    case 1:
        $recargo=1.85;
        break;
        case 2:
            $recargo= 3.09;
            break;
            case 3:
                $recargo= 4.99;
                
                break;
                default :
                $recargo= 0;

        }
        return ($recargo + $unidades*2.25);

    }
    echo gastos(1 , 4 );
    ?>
</body>
</html>