<?php

/*
    [ Static Keyword ]
    
    - Static Properties/Methods are Used to Access Properties/Methods in a Global Scope
    
    - Declaring Class Properties od Methods as Static 
    Makes Them Accessible Without Needing an Instantiation of the Class.
    
    - Because Static Methods are Callable Without an Instance of the Object Created,
    the Pseudo-Variable $this is not Available Inside the Method Declared as Static.
    
    - A Property Declared as Static Cannot be Accessed
    With an Instantiated Class Object (Though a Static Method Can).
    
    - "One of the Major Benefits to Using Static Properties
    is That They Keep Their Stored Values For The Duration of The Script."
*/

class Iphone1{
    public static $name = ' EGY ';
    public static $ram = ' 2GB ';

    public static function sayHello(){
        return ' Hello ';
    }

}
// $phone = new Iphone1();
// echo $phone->sayHello();

echo Iphone1::sayHello();

// echo Iphone1::$name;
// echo Iphone1::$ram;
// echo Iphone1::sayHello();

// echo Iphone::ram; -> no constant => Error



?>