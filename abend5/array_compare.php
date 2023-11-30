<?php
$a1 = [ 1, 2, 3 ];
$a2 = [ 1, 3, 2 ];

var_dump($a1 == $a2);

$a1 = [
    'username' => 'Test',
    'pwd' => 'xyz'
];
$a2 = [
    'username' => 'Test',
    'pwd' => 'xyz'
];

var_dump($a1 == $a2);
