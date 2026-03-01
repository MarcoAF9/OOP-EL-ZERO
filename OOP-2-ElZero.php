<?php

// Main Class or Super Class or Parent
class AppleDevice {

    //Properties
    public $ram         = '5 GB'; 
    public $inch        = '6 Inch';
    public $space       = '256 GB';
    public $color       = 'Darkblue';
    public $screen      ='LCD';
    public $ownerName ;
    public $chip        = "A19";
    private $lock ;
    public $name;
    public $price;

    const OWNERNAME = 4 ;

    //Methods
    public function changeSpac($r,$in,$sp,$co,$na){
    $this->ram          = $r;
    $this->inch         = $in;
    $this->space        = $sp;
    $this->color        = $co;

        if(strlen($na) > self::OWNERNAME){
        $this->ownerName    =$na;
        }else{
            echo 'Sorry this name is too short';
        }
    }
    public function changLock($lo){
        $this->lock = sha1( $lo );
    }

    final public function sayHallo($n){
        $this->name = $n;
        echo 'Welcome To ' . $n ;
    }
}

//Inheritance
// Child
class Sony extends AppleDevice{
    //Properties
    public $camera      ='25MB';

    public function changeSpacs($r,$in,$sp,$co,$na,$ca){
    $this->ram          = $r;
    $this->inch         = $in;
    $this->space        = $sp;
    $this->color        = $co;
        if(strlen($na) > self::OWNERNAME){
        $this->ownerName    =$na;
        }else{
            echo 'Sorry this name is too short';
        }
    $this->camera       = $ca;
    }
    
}


$IPhone17 = new AppleDevice();
$IPhone17 -> changeSpac('8 GB','6.3 Inch','1 TB','Black','Marcos');
$IPhone17->changLock('Maro1234');
$IPhone17->price = '$400';
$IPhone17->sayHallo('IPhone');
echo'<pre>';
// var_dump($IPhone17);
//or
print_r($IPhone17);
echo '</pre>';

$SonyXpria = new Sony();
$SonyXpria -> changeSpacs('8 GB','6.3 Inch','1 TB','Black','MarcoS','30MB');
$SonyXpria->sayHallo('Sony');
echo'<pre>'; print_r($SonyXpria); echo '</pre>';

?>