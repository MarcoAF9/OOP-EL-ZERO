<?php

/*
    Auto Load Classes
*/

// require 'AutoLoad/Testing1.class.php';
// require 'AutoLoad/Tesitng2.class.php';
// require 'AutoLoad/Testing3.class.php';

spl_autoload_register(function ($class){

    require 'AutoLoad/' . $class . '.class.php';

});
// If u called a class from another fill make sure that the name of file === the name of class or the name of class === the name of file
$var = new Test();

print_r($var);
?>