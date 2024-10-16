<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <?php
  function factorial($n){
  //caso base
  if ($n == 1){
  return 1;
  }else{
    return $n *factorial($n -1);
  }
}

$numero=5;
echo"$numero!=" . factorial($numero);
    ?>
</body>
</html>