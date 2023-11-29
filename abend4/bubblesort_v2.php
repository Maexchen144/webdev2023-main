<?php
$arr = [ 16, 6, 8, 2 ];
// $arr = [ 6, 8, 2, 16 ]; // nach 1. durchlauf

// zuerst nur innere schleife erläutern! denke von innen nach außen!

var_dump( count($arr) );

/*
lese anzahl der elemente im array
setze zähler ($counter) auf index 0
wiederhole solange $counter < anzahl-1
  wenn wert an index $counter > wert an index $counter+1
    dann tauschen
*/
