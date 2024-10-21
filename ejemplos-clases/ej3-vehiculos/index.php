<?php
include ("Vehiculo.php");
include ("Coche.php");
include ("Moto.php");

$coche = new Coche(4, "rojo", 0, 0, 0, 180, 500, 200, 4);
$moto = new Moto(4, "negro", 0, 0, 0, 120);

echo "<h2>Coche</h2>";
$ruedasCoche = $coche->getNumRuedas();
echo "<p>Numero de ruedas: $ruedasCoche</p>";
$colorCoche = $coche->getColor();
echo "<p>Color: $colorCoche</p>";
$vMaxCoche = $coche->getVMax();
echo "<p>Velocidad Máxima: $vMaxCoche km/h</p>";
$acelerarCoche = $coche->acelerar(60);
echo "<p>Velocidad tras acelerar: $acelerarCoche km/h</p>";
$frenarCoche = $coche->frenar(30);
echo "<p>Velocidad tras frenar: $frenarCoche km/h</p>";
$claxon = $coche->pitar();
echo "<p>Sonido del claxon: $claxon</p>";
$capRestante = $coche->getCapacidadRestanteMaletero();
echo "<p>Capacidad restante del maletero: $capRestante</p>";
$capTotal = $coche->getCapacidadTotalMaletero();
echo "<p>Capacidad restante del maletero tras vaciar: $capTotal</p>";
$acelerarCoche = $coche->acelerar(160);
echo "<p>Velocidad tras acelerar: $acelerarCoche km/h</p>";



echo "<h2>Moto</h2>";
$ruedasMoto = $moto->getNumRuedas();
echo "<p>Numero de ruedas: $ruedasMoto</p>";
$colorMoto = $moto->getColor();
echo "<p>Color: $colorMoto</p>";
$vMaxMoto = $moto->getVMax();
echo "<p>Velocidad Máxima: $vMaxMoto km/h</p>";
$acelerarMoto = $moto->acelerar(60);
echo "<p>Velocidad tras acelerar: $acelerarMoto km/h</p>";
$frenarMoto = $moto->frenar(30);
echo "<p>Velocidad tras frenar: $frenarMoto km/h</p>";
$claxon = $moto->pitar();
echo "<p>Sonido del claxon: $claxon</p>";
$caballito = $moto->hacerCaballito();
echo "<p>Haciendo caballito: $caballito</p>";
$caballito = $moto->hacerCaballito();
echo "<p>Haciendo caballito: $caballito</p>";
?>