<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // https://www.php.net/manual/de/types.comparisons.php
    $count = 5;
    if ($count) {
        echo "$count Produkte sind im Warenkorb!<br>";
    } else {
        echo "Ihr Warenkorb ist leer!";
    }
    ?>
</body>
</html>
