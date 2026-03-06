<?php

/*
    Methods Chaining
    - When a Class's Methods Return The $this Keyword, They Can Be Chained Together
*/

class Iphone2{

    public $name;
    public $email;

    public function pressPower() {
        echo 'You Have Pressed The Power Button ';
        return $this;
    }
    public function bootPhone() {
        echo 'The Phone is Booting Now... ';
        return $this;
    }
    public function sayWelcome() {
        echo 'Welcome To Phone ';
        return $this;
    }
    }

$phone = new Iphone2();
// $phone->pressPower();
// $phone->bootPhone();
// $phone->sayWelcome();

$phone->pressPower()->bootPhone()->sayWelcome();
echo'<pre>'; print_r($phone); echo'</pre>';

?>