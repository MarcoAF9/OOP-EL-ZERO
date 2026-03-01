<?php
/*
    Class & Object
    - Class is a Blueprint That u can create object form .
    - Object is a member in the Main Application. 
    - Class has Properties & Methods
    - Encapsulation
    
    Abstraction Class
    - Cannot Be Instantiated [ Cannot Create Object From]
    - Made For Other Classes To Inherit Prop & Methods From
    - Can Have Methods & Properties
    - Can Have Abstracted Method and Non Abstracted Methods
    - Abstract Methods [ Contains No Body Code ]

    * Rules To Go One
    * Force Developers To Follow Your Methods

    - Variable Inside Class = [ Property ].
    - Variable Outside Class = [ Variable ].

    - Function Inside Class = [ Method ].
    - Function Outside Class = [ Function ].

    Inheritance | Final Keyword
    - Final Function => Means That you can not Write it even as the same way as the Original ( parent ) class but you can use it . => final public function
    - Final Class => Means That you can not Inherit the class by any way = the last version of it .  

    - [class] = Class Keyword
    - [ new ] = New Object Keyword
    - [ Public, Privet, Protected] = Visibility Markers or Access Modifiers => UML {+ , - , #}
    - [ -> ] = Object Operator *IMP*
    - [ $this ] = Pseudo Variable [ Refer To Object Properties]
    - [ :: ] = Scope Resolution Operator [ ERROR => Paamayim Nekudotayim => Double Colon]


    - self :
        - Refer To Current Class
        - Access Static Members
        - Not Use ( $ ) Because it's Not Represent a Variable But Present Class Construction

    -this:
        - Refer To Current Object
        - Access Non Static Members
        - Use ( $ ) Because It's Represent a Variable

    Apple ( as an Example)
    - Class         = Apple Blueprint Design
    - Object        = IPhone That China Made
    - Application   = Apple Store

    Web Application (Another Example)
    - Class         = Code to Add New member 
    - Object        = The Members 
    - Application   = Web Application Registration
    
    Blog System 
    - Class         = Code to Add New Post , Article , New ,Information 
    - Object        = Post , Article , New ,Information 
    - Application   = Blog System

*/
    class AppleDevice {
        // Properties
    // visibility marker or access modifiers (Public (UML -> +) , privet(-), protected (#))
    // public = var in the old versions
    // we can add values as default

    public $ram = '2GB'; 
    public $inch = '5 Inch';
    public $space = '32 GB';
    public $color = 'Black';
    public $ownerName = 'Marcos';

    //Constants
    //const CONSTANT_NAME = 'Value';
    // const CHIP = 'A9';
    const OWNERNAME = 4 ;


    
    //Methods

    public function getSpecification() {
        echo 'This IPhone Ram is '.$this->ram .'<br>';
        echo 'This IPhone Screen is '.$this->inch .'<br>';
        echo 'This IPhone Room is '.$this->space .'<br>';
    }
    public function setOwnerName() {
            // strlen -> the length of string
        if(strlen($this->ownerName ) < self::OWNERNAME){
            echo 'Owner Name Cant Be Less Than ' . self::OWNERNAME . ' Chars';
        }else{
            echo 'Your Name Has Been Set';
        }
    }
    public function setOwnerNameParameter ($owner) {
            //strlen -> the length of string
        if(strlen($owner )< 2){
            echo 'Owner Name Cant Be Less Than 2 Chars';
        }else{
            echo 'Your Name Has Been Set';
        }
    }

    }

$iphone6plus = new AppleDevice();

// Property wrote without the $ sign
$iphone6plus->ram = "3GB";
$iphone6plus->inch = "6 Inch";
$iphone6plus->space = "16 GB";
$iphone6plus->color = "Gold";
$iphone6plus->ownerName = "Maro";
$iphone6plus->getSpecification();
$iphone6plus->setOwnerName();
// $iphone6plus->setOwnerNameParameter('Maro');

//---------------------------------------------------
// to echo the constant
    echo '\n'.AppleDevice::OWNERNAME.'<br>';
    //or
    echo $iphone6plus::OWNERNAME.'\n';
//----------------------------------------------------
    echo'<pre>';
    var_dump($iphone6plus);
    echo'</pre>';

$iphone16 = new AppleDevice();

$iphone16->ram = "4GB";
$iphone16->inch = "8 Inch";
$iphone16->space = "128 GB";
$iphone16->color = "DarkBlue";
$iphone16->ownerName = "M";
$iphone16->getSpecification();
$iphone16->setOwnerName();
// $iphone16->setOwnerNameParameter('M');
    echo'<pre>';
    var_dump($iphone16);
    echo'</pre>';

$iphone17e = new AppleDevice();
$iphone17e->getSpecification();
// $iphone17e->setOwnerName();
$iphone17e->setOwnerNameParameter($iphone17e->ownerName);

    echo'<pre>';
    var_dump($iphone17e);
    echo'</pre>';

?>