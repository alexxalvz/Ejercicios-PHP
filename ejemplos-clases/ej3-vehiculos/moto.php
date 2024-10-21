<?php
class Moto extends Vehiculo{
    public function __construct($numRuedas, $color, $posX, $posY, $velocidad, $vMax){
        parent::__construct($numRuedas, $color, $posX, $posY, $velocidad, $vMax);
        $this->numRuedas = 2;
    }

    public function hacerCaballito(){
        $aleatorio = rand(0, 1);
        if($aleatorio == 0){
            return ("¡Guau!");
        } else {
            return ("¡Ouch!");
        }
    }

    public function pitar(){
        return "¡Bing, bing!";
    }
}

?>