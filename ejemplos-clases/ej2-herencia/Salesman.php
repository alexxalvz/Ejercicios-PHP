<?php
class Salesman extends Employee{
private $sales;
private $comision;


public function __construct($name,$salary,$date,$comision){
parent::__construct($name,$salary,$date);
$this ->comision=$comision;
$this->sales = 0;
}

public function sell($qty){
$this 
->sales = $this->sales + $qty;
}

public function calculateSalary(): float{
    return $this->salary + $this->sales*$this->comision/100;
}


}
?>