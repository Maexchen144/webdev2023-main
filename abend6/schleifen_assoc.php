<?php
$arr_index = [ 5, 'Text', 5.6, 5, false, 7, 8, 9 ];
$arr_assoc = [
    'firstname' => 'Markus',
    'lastname'  => 'Huber',
    'city'      => 'Vienna'
];

/**
 * 3. foreach Schleife (exklusiv für Array [und für später: auch für iterierbare Objekte])
 */
foreach ($arr_assoc as $key => $val) {
    echo "$key: $val<br>";
}
