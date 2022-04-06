<?php


require_once 'vendor/autoload.php';

$moneyOne = new homework\money(5, 'UAH');
$moneyTwo = new homework\money(10, 'USD');
$moneyThree = $moneyOne->add($moneyTwo);
var_dump($moneyThree);

$currency = new homework\Currency('USD');