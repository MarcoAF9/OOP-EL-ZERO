<?php
/*
    Magic Methods
    -Method With Special Name Start With Double Underscore [ __ ] 

    1.1=> Construct:
    --- Called When Object Is Created
    --- Can be Inherited
*Construct - reverse - Destruct
    1.2=> Destruct:
    --- Called When Object Is Destroyed

*/


class Iphone {
    public $name;
    public $ram;
    
    // public function sayHello($n){

    //     $this->name = $n;
    //     echo ' hello ' . $n;
    // }
    public function __construct($n , $ra)
    {
        $this->name = $n;
        $this->ram = $ra;
        echo ' Hello ' . $this->name . ' Your Device Has ' . $ra .' Ram ';
    }
}

class Sony extends Iphone{

}

$iphone = new Iphone('Os','6GB');
echo'<pre>'; 
print_r($iphone); 
echo'</pre>';

// $Sony = new Sony();
// echo'<pre>'; 
// print_r($Sony); 
// echo'</pre>';


?>