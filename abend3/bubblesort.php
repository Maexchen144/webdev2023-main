<?php
$arr = [ 16, 6, 8, 2, 1, 12, 3, 5, 10 ];
$arr = [ 6, 8, 2, 1, 12, 3, 5, 10, 16 ]; // nach 1. durchlauf
$arr = [ 6, 2, 1, 8, 3, 5, 10, 12, 16 ]; // nach 2. durchlauf
$arr = [ 1, 2, 3, 5, 6, 8, 10, 12, 16 ];

// zuerst nur innere schleife erläutern! denke von innen nach außen!

/*
lese anzahl der elemente im array
setze zähler ($counter) auf index 0
wiederhole solange $counter < anzahl-1
  wenn wert an index $counter > wert an index $counter+1
    dann tauschen
*/
