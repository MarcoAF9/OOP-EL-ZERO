<?php

/*
    Namespace
*/

require 'Apple.php';
require 'ApplePCs.php';
require 'Sony.php';
require 'LG.php';

$iPhone = new Apple\Hardware\Phones\CreatePhone();
$iPhone->sayHello();
print_r($iPhone);

$PC = new Apple\Hardware\PCs\CreatePC();
$PC->sayHello();
print_r($PC);
?>