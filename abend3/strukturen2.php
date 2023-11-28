<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $count = 3;

    var_dump( $count >= 3 );
    echo '<hr>';

    if ($count >= 3) {
        // alles hier in diesem block innerhalb der {} wird ausgeführt, wenn die bedingung true ergibt
        echo 'Warenkorb OK!';
    } else {
        echo 'Bitte noch Waren hinzufügen!';
    }
    echo 'footertext';
    ?>
</body>
</html>
