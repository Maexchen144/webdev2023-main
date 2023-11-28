<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Arrays (Datentyp) - zunächst: indizierte Arrays!

    // Alternative (ältere) Schreibweise:
    // $arr = array(5, 4, 1, 6, 8, 1, 3, 7, 5, 123, 5.3, 'test', false);

    $arr = [ 123, 5.3, 'test', false ];
    // var_dump($arr);

    echo $arr[1];
    $arr[1] = 'Neuer Wert!';
    echo $arr[1];

    echo "<hr>\n";

    $arr2 = [ 5, 4, 3 ];
    $arr2[] = 1;
    $arr2[] = 5;
    $arr2[] = 10;
    var_dump($arr2);
    ?>
</body>
</html>
