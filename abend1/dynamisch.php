<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kalender</h1>
    <p id="test"></p>
    <p>
        <?php
        /*
        Content:
            - lese alle Termine des heutigen Datums aus einer Datenbank<br>
            - und Ausgabe<br>
        */
        echo 'Hallo Welt';
        ?>
    </p>
    <script>
        setTimeout(function() {
            document.getElementById('test').innerHTML = 'Javascript hat was getan';
        }, 2000);
    </script>
</body>
</html>
