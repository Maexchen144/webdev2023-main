<?php
$arr = [ 16, 6, 8, 2, 1, 12, 3, 5, 10 ];
// $arr = [ 6, 8, 2, 1, 12, 3, 5, 10, 16 ]; // nach 1. durchlauf
// $arr = [ 6, 2, 1, 8, 3, 5, 10, 12, 16 ]; // nach 2. durchlauf
// $arr = [ 1, 2, 3, 5, 6, 8, 10, 12, 16 ];

// zuerst nur innere schleife erläutern! denke von innen nach außen!

/*
setze tauschmarker auf true
setze anzahl der elemente
wiederhole solange tauschmarker true ist
  setze tauschmarker auf false
  setze index-zähler auf 0
  wiederhole solange index-zähler < anzahl der elemente - 1
    wenn das element an index-zähler > element an index-zähler+1
      tausche element an index-zähler mit element an index-zähler+1
      setze tauschmarker auf true
    index-zähler erhöhen
*/
