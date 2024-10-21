<?php

class Vehiculo {
    private $numRuedas;
    private $color;
    private $posX;
    private $posY;
    private $velocidad;
    private $vMax;

    public function __construct($numRuedas, $color, $posX, $posY, $velocidad, $vMax) {
        $this->numRuedas = $numRuedas;
        $this->color = $color;
        $this->posX = 0;
        $this->posY = 0;
        $this->velocidad = 0;
        $this->vMax = $vMax;
    }

    public function acelerar($aceleracion)
    {
        if($aceleracion + $this->velocidad > $this->vMax){
            return "No es posible realizar la aceleración.";
        } else{
            return $this->velocidad = $aceleracion + $this->velocidad;
        }
    }

    public function frenar($frenado)
    {
        if($frenado > $this->velocidad){
            return $this->velocidad = 0;
        } else{
            return $this->velocidad = $this->velocidad - $frenado;
        }
    }

    public function tocarClaxon()
    {
        return "Beep, beep";
    }

    public function getNumRuedas()
    {
        return $this->numRuedas;
    }

    public function setNumRuedas($numRuedas): void
    {
        $this->numRuedas = $numRuedas;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getPosX(): int
    {
        return $this->posX;
    }

    public function setPosX(int $posX): void
    {
        $this->posX = $posX;
    }

    public function getPosY(): int
    {
        return $this->posY;
    }

    public function setPosY(int $posY): void
    {
        $this->posY = $posY;
    }

    public function getVelocidad(): int
    {
        return $this->velocidad;
    }

    public function setVelocidad(int $velocidad): void
    {
        $this->velocidad = $velocidad;
    }

    public function getVMax()
    {
        return $this->vMax;
    }

    public function setVMax($vMax): void
    {
        $this->vMax = $vMax;
    }


}
?>