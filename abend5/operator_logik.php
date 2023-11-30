<?php
$x = 5;
$y = 8;

if ($x === 5 && $y === 8) {
    echo "ja, beide werte stimmen<br>";
}

$x = 5;
$y = 8;

if ($x === 5 || $y === 9) {
    echo "ja, zumindest ein wert stimmt<br>";
}

var_dump( true && true );
var_dump( true && false );
var_dump( false && true );
var_dump( false && false );
