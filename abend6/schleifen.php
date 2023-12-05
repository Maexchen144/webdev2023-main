<?php
$arr_index = [ 5, 'Text', 5.6, 5, false, 7, 8, 9 ];
$arr_assoc = [
    'firstname' => 'Markus',
    'lastname'  => 'Huber',
    'city'      => 'Vienna'
];

/**
 * 1. while Schleife
 */
$count = count($arr_index);

$i = 0;
while ($i < $count) {
    echo $arr_index[$i] . '<br>';
    $i++;
}

echo '<hr>';

/**
 * 2. for Schleife
 */
for ($i = 0; $i < $count; $i++) {
    echo $arr_index[$i] . '<br>';
}

echo '<hr>';

/**
 * 3. foreach Schleife (exklusiv für Array [und für später: auch für iterierbare Objekte])
 */
foreach ($arr_index as $element) {
    echo $element . '<br>';
}

echo '<hr>';

/**
 * 4. do-while Schleife
 */
$i = 0;
do {
    echo $arr_index[$i] . '<br>';
    $i++;
} while ($i < $count);
