<?php
$arr = [ 16, 6, 8, 2 ];
// $arr = [ 6, 8, 2, 16 ]; // nach 1. durchlauf

// zuerst nur innere schleife erläutern! denke von innen nach außen!

$count = count($arr);
$counter = 0;
while ($counter < $count-1) {
    if ($arr[$counter] > $arr[$counter+1]) {
        $tmp = $arr[$counter];
        $arr[$counter] = $arr[$counter+1];
        $arr[$counter+1] = $tmp;
    }
    $counter++;
}

/*
$count = count([ 16, 6, 8, 2 ]); // ergibt 4
$counter = 0;
while (0 < 3) {
    if (16 > 6) {
        $tmp = 16;
        $arr[0] = 6;
        $arr[1] = 16;
    }
    $counter++;
}
*/

/*
lese anzahl der elemente im array
setze zähler ($counter) auf index 0
wiederhole solange $counter < anzahl-1
  wenn wert an index $counter > wert an index $counter+1
    dann tauschen
*/
