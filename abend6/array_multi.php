<?php

$produkte = [];

$produkte[] = [
    'name'   => 'Bohrmaschine',
    'preis'  => 99.9,
    'anzahl' => 30
];

$produkte[] = [
    'name'   => 'Waschmaschine',
    'preis'  => 399.9,
    'anzahl' => 10
];

$produkte[] = [
    'name'   => 'Geschirrspüler',
    'preis'  => 599.9,
    'anzahl' => 16
];

var_dump($produkte);

echo $produkte[2]['anzahl'];
