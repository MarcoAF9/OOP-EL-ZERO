<?php

/*
Abstraction Class
    - Cannot Be Instantiated [ Cannot Create Object From]
    - Made For Other Classes To Inherit Prop & Methods From
    - Can Have Methods & Properties
    - Can Have Abstracted Method and Non Abstracted Methods
    - Abstract Methods [ Contains No Body Code ]
*/

abstract class MakeDevice {

    public $ram;
    public $test;

    public function sayHello(){
        echo 'Say Hello';
    }

    abstract public function sayBye();
    abstract public function sayTest($test);

}

class AppleDevice extends MakeDevice {
    public function sayBye()
    {
        echo 'Bye';
    }
    public function sayTest($test)
    {
        if (empty($test)) {
            throw new Exception("Error : can not add a empty Variable");
        }
        $this->test = $test ;
        echo $this->test;
    }
}
try {
$iphone6plus = new AppleDevice();
$iphone6plus->sayHello();
echo'<pre>'; print_r($iphone6plus); echo'</pre>';
$iphone6plus->sayBye();
$iphone6plus->sayTest('Test1'); 

}catch (Exception $e){
    echo $e->getMessage();
}finally{
    echo 'End' ;
}

?>