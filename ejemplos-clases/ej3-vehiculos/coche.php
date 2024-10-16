<?php
class coche extends Vehiculo{

    private $capacidadTotalMaletero;
    private $capacidadRestanteMaletero;
    private $numPuertas;

     public function __construct($numRuedas,$color,$posx,$posy,$velocidad,$vMax,$capacidadTotalMaletero,$capacidadRestanteMaletero,$numPuertas ) {
        parent::__construct( $numRuedas, $color, $posx, $posy , $velocidad,$vMax );
        
    }


}

?>