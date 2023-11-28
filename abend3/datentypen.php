<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Datatypes</h1>
    <?php
        // int - Ganzzahl
        $x = 5;
        var_dump($x);

    ?>
        <hr>
    <?php
        // float - Gleitkommazahl
        $x = 2.5;
        var_dump($x);

        echo '<hr>';

        // string - Zeichenkette
        $anzahl = 4;
        echo 'Ich habe $anzahl Birnen im Einkaufswagen!\n';

        echo '<hr>';

        echo "Ich habe $anzahl Birnen im Einkaufswagen!\n";

        echo '<hr>';

        echo 'Dieses Produkt kostet $USD 10,-';

        echo '<hr>';

        // bool - Wahrheitswert
        $x = true;
        var_dump($x);

        echo '<hr>';

        // null - Variable ohne Wert
        $x = null;
        var_dump($x);

        echo '<hr>';
    ?>
</body>
</html>
