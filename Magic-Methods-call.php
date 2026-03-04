<?php
/*
    Magic Methods
    -Method With Special Name Start With Double Underscore [ __ ] 

    2.1= >Call:
    - Called When Invoking Function Not Accessible Or Not Found
    - Accept Two Parameters [ $MethodName, $Params ]

*/

class Iphone {

    public $name;
    public $ram;

    // public function welcomeToApp($n, $r){
    //     $this->name = $n;
    //     $this->ram = $r;
    //     echo ' Welcome '. $n . " Your Phone Has " . $r ." Ram ";
    // }

    public function __call($method, $params)
    {
        echo 'The Method [ ' . $method . ' ] Not Found Or Not Accessible ';

        foreach ($params as $param){
        echo $param."<br>";
        }
        // if ($method){ *At some point it will make an error
        //     $this->name = $params[0];
        //     $this->ram = $params[1];
        // }
        if(!empty($params)){
            $this->name = $params[0];
            $this->ram = $params[1];
        }
        print_r($params);
    }
}

$phone = new Iphone();
$phone->welcomeToMobile("OrO", "2GB");
echo '<pre>';
print_r($phone);
echo '</pre>';
?>