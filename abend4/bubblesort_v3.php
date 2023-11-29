<?php
$arr = [ 16, 6, 8, 2 ];
// $arr = [ 6, 8, 2, 16 ]; // nach 1. durchlauf

$count = count($arr);

// Wiederhole solange ein Tausch stattgefunden hat
$swapped = true;
while ($swapped === true) {
    $swapped = false;
    $counter = 0;
    while ($counter < $count-1) {
        if ($arr[$counter] > $arr[$counter+1]) {
            $tmp = $arr[$counter];
            $arr[$counter] = $arr[$counter+1];
            $arr[$counter+1] = $tmp;
            $swapped = true;
        }
        $counter++;
    }
}

var_dump($arr);
