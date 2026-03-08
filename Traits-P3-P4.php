<?php

/*
    Trait =>PHP 5.4
    - A Mechanism For Code Reuse In Sing;e Inheritance Language Such As PHP.
    - Problem With Extending Classes, Is That U Can Only Extend One. This Is A Little Limiting.
    - With Traits Its Possible For PHP Classes To Inherit Methods & Properties Form Multiple Sources.
    
    - You Cannot Extend Or Implements.
    - You Cannot Instantiate.
    - Its Supporting Class Not Replacing It.
    - Can Have Methods.
   *- Have Priority Over Class.
*/

trait MyFeature1 {

    public function feature(){
        echo ' This is Feature Number One ';
    }
}

trait MyFeature2 {

    public function feature(){
        echo ' This is Feature Number Two ';
    }
}

/* 
    If u Put Both Like This :-

    MyFeature1::feature insteadof MyFeature2;
    MyFeature2::feature insteadof MyFeature1;
    U will see an Error called => Uncaught Error: Call to undefined method Iphone::feature()
*/

class Iphone {
    use MyFeature1,MyFeature2{
        //*Alias
        // [ Trait Name ]:: [ Method Name ] [ Keyword as ] [ New Name ]
        MyFeature1::feature as Marcos_feat;

        // [ Trait Name ]:: [ Method Name ] [ insteadof ] [ Other Method Name ]
        MyFeature2::feature insteadof MyFeature1;

    }
}

// class AppleDevice{

//     public function sayHello(){
//         echo 'Hello From Class';
//     }
// }
// class Iphone extends AppleDevice{
//     use MyFeature;
// }

$iphone = new Iphone();
$iphone->feature();
$iphone->Marcos_feat();
echo'<pre>'; print_r($iphone);echo'</pre>';

?>