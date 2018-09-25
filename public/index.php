<?php

require '../vendor/autoload.php';

$toto = new App\wcs\hello;

echo $toto->talk().'<br>';

$tata = new HelloWorld\SayHello;

echo $tata->world();

?>