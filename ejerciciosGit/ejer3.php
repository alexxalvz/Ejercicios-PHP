<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena reversa</title>
</head>
<body>
    <?php
    function reverseString($string) {

        $len=strlen($string);
        if ($len== 1) {
            return $string[0];
    }else{
        return reverseString(substr($string,1, $len-1)) . (substr($string,0,1));
    }
}
$palabra="servidor";
echo "$palabra al reves es" .reverseString($palabra)."<br>";

    ?>
</body>
</html>