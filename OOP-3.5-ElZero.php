<?php

/*
Abstraction Class
    - Cannot Be Instantiated [ Cannot Create Object From]
    - Made For Other Classes To Inherit Prop & Methods From
    - Can Have Methods & Properties
    - Can Have Abstracted Method and Non Abstracted Methods
    - Abstract Methods [ Contains No Body Code ]

    * Rules To Go On
    * Force Developers To Follow Your Methods
*/

// -- We can Delete All abstract Methods Without having any troubles with the rest code 
// -- We can have Abstract Methods and Can't Have Abstract Properties
// -- Can't Made a new object From Abstract Classes
// -- If an abstract method is defined as public, it must be implemented as public in the child class. However, if it is protected, it can be implemented as either protected or public (following the visibility rule from weakest to strongest: public > protected > private) [ We can't use ( Visibility Markers=> Privet ) in this case because it's the top secure]

// *-- In other Words If an abstract method is defined as public, it must be implemented as public in the child class. However, if it is protected, it can be implemented as either protected or public (following the visibility rule from weakest to strongest: public > protected > private). Note: We cannot use the private visibility marker in this case because abstract methods must be accessible for inheritance

abstract class MakeDevice {
    
    abstract protected function testPreformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($n);

}

class Iphone extends MakeDevice {

    public $owner;

    public function testPreformance(){
        echo 'Preformance Is Good 100%';
    }
    public function verifyOwner(){
        echo 'Owner Verified';
    }
    public function sayWelcome($s){
        $this->owner = $s;
        echo 'Welcome '. $s;
    }
}

class Ipad extends MakeDevice {

    public $owner;

    public function testPreformance(){
        echo 'Preformance Is Good 100%';
    }
    public function verifyOwner(){
        echo 'Owner Verified';
    }
    public function sayWelcome($x){
        $this->owner = $x;
        echo 'Welcome '. $this->owner;
    }
}

try{
$iphone = new Iphone();
$iphone->sayWelcome('Mark');
echo'<pre>'; print_r($iphone); echo'</pre>';

$Ipade = new Ipad();
$Ipade->sayWelcome('Marcos');
echo'<pre>'; print_r($Ipade); echo'</pre>';

}

// catch(Exception $e){
//      echo $e->getMessage();
//     throw new Exception($e->getMessage());
// }
catch(Throwable $e){
    echo $e->getMessage();
    // throw new Exception($e->getMessage());
}
finally{
    echo 'End';
}
?>