<?php 
//Car Task

class car{
    private $Gallons;
    private $Distance;
    private $Fuel_Efficiency;
    private $pricePerGallon;

    public function __construct($d,$f,$p)
    {
        $this->Distance = $d;
        $this->Fuel_Efficiency = $f;
        $this->pricePerGallon = $p;
    }
    public function calculateGallons(){
        $this->Gallons = $this->Distance / $this->Fuel_Efficiency ;
        echo'The Gallons = '. $this->Gallons .' Gallons ';
        return $this;
    }

    public function totalAmount(){
        echo 'And Total Amount = '.$this->Gallons * $this->pricePerGallon.' $';
        return $this;
    }
}


$Car = new car(100,20,5) ;
$Car->calculateGallons()->totalAmount();



?>