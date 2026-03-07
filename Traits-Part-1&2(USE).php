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
    - Have Priority Over Class.
*/

trait FingerPrint {

    public function FingerFeature(){

    echo ' This Has Finger Print Feature.';
    return $this;
    }

}
trait ThreeDimensionTouch {

    public function ThreeD(){

    echo ' This Has 3D Touch Feature.';
    return $this;
    }

}
trait FaceDetect {

    public function FaceFeature(){

    echo ' This Has Detect Feature.';
    return $this;
    }

}
class Iphone3{

    use FingerPrint;
    use ThreeDimensionTouch;
    use FaceDetect;
    public function sayHello(){ //If U didn't Write Public VC understand is as Public 
        echo 'Hello Form Iphone';
        return $this;
    }

}

class Sony {
    use FaceDetect;
    public function sayHello(){ //If U didn't Write Public VC understand is as Public 
        echo 'Hello Form Sony';
        return $this;
    }

}

class Nokia {

    function sayHello(){ //If U didn't Write Public VC understand is as Public 
        echo 'Hello Form Nokia';
        return $this;
    }
}

$phone = new Iphone3();
$phone->FingerFeature()->ThreeD()->FaceFeature()->sayHello();
echo'<pre>'; Print_r($phone); echo'</pre>';

$sony = new Sony();
$sony->FaceFeature()->sayHello();
echo'<pre>'; Print_r($phone); echo'</pre>';

$nokia = new Nokia();
$nokia->sayHello();
echo'<pre>'; Print_r($phone); echo'</pre>';

?>