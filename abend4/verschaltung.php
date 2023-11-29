<?php
$a = [ 1, 2, 3, 6, 8, 9 ];

// natürlich ist das besser:
// echo end($a);

$lastindex = count($a) - 1;
echo $a[$lastindex];

// echo $a[count($a)-1];
