<?php

/*
    Magic Methods 
    - Method With Special Name Start With Double Underscore [ __ ]

    Get:
    - Called When Getting A Property Not Accessible Or Not Found
    - Accept One Parameter [$Prop]

    Set:
    - Called When Setting a Value To a Property Not Accessible Or Not Found
    - Accept Tow Parameters [ $Prop, $Value ]

*/
class Iphone{

    public $name;
    public $ram;
    private $coloring;

    // public function __get($prop)
    // {
    //     echo 'The Property [ ' . $prop . ' ] Is Not Found Or Not Accessible <br>';
    // }

    public function __set($prop, $val)
    {
        echo 'The Property [ ' . $prop . ' ] Is Not Found Or Not Accessible <br>';
        echo 'And You Cannot Assign This Value [ ' . $val .' ] TO It';
    }


}

$phone = new Iphone();
    $phone->coloring = 'Red'; //Get Value
// echo $phone->coloring ; 
echo '<pre>';
print_r($phone);
echo '</pre>';

?>