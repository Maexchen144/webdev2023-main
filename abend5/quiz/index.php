<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <h1>Quiz</h1>

        <p>Frage 1</p>
        <p>Was ist in PHP im $_POST Array gepeichert?</p>

        <form action="answer.php" method="POST">

            <div class="mb-3">
                <input type="checkbox" class="btn-check" name="answer[]" value="0" id="button0">
                <label class="btn btn-outline-success" for="button0">Alle Parameter der URL</label>
            </div>

            <div class="mb-3">
                <input type="checkbox" class="btn-check" name="answer[]" value="1" id="button1">
                <label class="btn btn-outline-success" for="button1">Alle (Body) Daten, die über einen HTTP POST Request übertragen werden</label>
            </div>

            <div class="mb-3">
                <input type="checkbox" class="btn-check" name="answer[]" value="2" id="button2">
                <label class="btn btn-outline-success" for="button2">Gar nichts</label>
            </div>

            <div class="mb-3">
                <input type="checkbox" class="btn-check" name="answer[]" value="3" id="button3">
                <label class="btn btn-outline-success" for="button3">Die Server Settings</label>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>

</body>
</html>
