<?php
class Vehiculo{
    private static $numRuedas;
    public $color;
    private $posx;
    private $posy;
    private $velocidad;
    private $vMax;
   
    public function __construct($numRuedas, $color,$posx,$posy, $velocidad, $vMax){
        $this->vMax = $vMax;
        $this->color = $color;
        $this->posx = $posx=0;
        $this->posy = $posy=0;
            $this->velocidad = $velocidad;
            $this->vMax = $vMax;
    }
   
   
     function acelerar($incremento):int {
        $nuevaVelocidad = $this->velocidad + $incremento;
        if ($nuevaVelocidad > $this->vMax) {
            $this->velocidad = $this->vMax;
            return "No es posible realizar la aceleración";
        } else {
            $this->velocidad = $nuevaVelocidad;
            return "Velocidad actual: " . $this->velocidad;
        }
    }

     function frenar($decremento):int {
        $nuevaVelocidad = $this->velocidad - $decremento;
        $this->velocidad = max(0, $nuevaVelocidad);
        return "Velocidad actual: " . $this->velocidad;
    }

     function tocarClaxon() {
        return "¡Beep, beep!";
    }

   
/**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
 
    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }
 
    /**
     * @return mixed
     */
    public function getNumRuedas()
    {
        return $this->numRuedas;
    }
 
    /**
     * @param mixed $numRuedas
     */
    public function setNumRuedas($numRuedas): void
    {
        $this->numRuedas = $numRuedas;
    }
 
    public function getPosx(): int
    {
        return $this->posx;
    }
 
    public function setPosx(int $posx): void
    {
        $this->posx = $posx;
    }
 
    public function getPosy(): int
    {
        return $this->posy;
    }
 
    public function setPosy(int $posy): void
    {
        $this->posy = $posy;
    }
 
    public function getVelocidad(): int
    {
        return $this->velocidad;
    }
 
    public function setVelocidad(int $velocidad): void
    {
        $this->velocidad = $velocidad;
    }
 
    /**
     * @return mixed
     */
    public function getVMax()
    {
        return $this->vMax;
    }
 
    /**
     * @param mixed $vMax
     */
    public function setVMax($vMax): void
    {
        $this->vMax = $vMax;
    }
 
   

   


   }

   
?>