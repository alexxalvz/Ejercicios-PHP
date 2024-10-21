<?php

class Coche extends Vehiculo{

    public function __construct($numRuedas, $color, $posX, $posY, $velocidad, $vMax, $capacidadTotalMaletero, $capacidadRestanteMaletero, $numPuertas){
        parent::__construct($numRuedas, $color, $posX, $posY, $velocidad, $vMax);
        $this->numRuedas = 4;
        $this->capacidadTotalMaletero = $capacidadTotalMaletero;
        $this->capacidadRestanteMaletero = $capacidadRestanteMaletero;
        $this->numPuertas = $numPuertas;

    }

    public function meterEnMAletero(){

    }

    public function vaciarMaletero(){

    }

    public function pitar(){
        return "¡Honk, honk!";
    }

    public function getCapacidadRestanteMaletero()
    {
        return $this->capacidadRestanteMaletero;
    }

    public function setCapacidadRestanteMaletero($capacidadRestanteMaletero): void
    {
        $this->capacidadRestanteMaletero = $capacidadRestanteMaletero;
    }

    public function getCapacidadTotalMaletero()
    {
        return $this->capacidadTotalMaletero;
    }

    public function setCapacidadTotalMaletero($capacidadTotalMaletero): void
    {
        $this->capacidadTotalMaletero = $capacidadTotalMaletero;
    }

    public function getNumPuertas()
    {
        return $this->numPuertas;
    }

    public function setNumPuertas($numPuertas): void
    {
        $this->numPuertas = $numPuertas;
    }


}
?>