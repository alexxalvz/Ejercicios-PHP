<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php
    $numeros=array(0,1,2,3,4);
    $suma=0;
    foreach($numeros as $numero) {
  echo"$numero <br>";
    $suma+= $numero;
    }

    echo"<p>Suma= $suma</p>";
    //' para imprimir literalmente lonque pone
    echo'Tamaño de $a'.count(value: $numeros);
    var_dump($suma); //Instruccion del proceso de desarrollo para contenido de variable. Imprime variable compleja.
    ?>

</body>
</html>