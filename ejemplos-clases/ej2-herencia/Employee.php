<?php
class Employee{

    private $name;

    protected $salary;
    private $joindata;
    private $endDate;


    public function __construct($name, $salary, $joindata){
        $this->name = $name;
        $this->salary = $salary;
        $this->joindata = $joindata;
    }

    public function endContract($date){
        $this->endDate = $date;
        $this->salary=0;
}

    public function calculateSalary():float{
        return $this->salary;
    }
}
