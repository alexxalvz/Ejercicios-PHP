<?php
class Coche{
    private static $numRuedas=4;
    public $color;
    private $posx=0;
    private $posy=0;
    private $velocidad;
    private $vMax;
   
   
   
   function acelerar($x, $y)  {
   
       $this->posx=$x;
       $this->posy=$y;
   }
   
   function frenar() {
   return "Beep beep";
   
   }
   
   function getPosicion() {
   
       return "x= $this->posx, y=$this->posy";
   }
   
   }

   
?>