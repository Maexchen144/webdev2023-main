<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quiz</h1>
    <p>Frage 1</p>
    <p>Was ist in PHP im $_POST Array gepeichert?</p>
    <form action="antwort.php" method="POST">
        <input type="checkbox" name="antwort1" value="on"> Alle Parameter der URL<br>
        <input type="checkbox" name="antwort2" value="on"> Alle (Body) Daten, die über einen HTTP POST Request übertragen werden.<br>
        <input type="checkbox" name="antwort3" value="on"> Gar nichts.<br>
        <input type="checkbox" name="antwort4" value="on"> Die Server Settings.<br>
        <input type="submit">
    </form>
</body>
</html>
