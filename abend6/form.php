<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (count($_POST)) {
        if ($_POST['firstname'] == '') {
            echo "Das ist ein Pflichtfeld";
        }
        echo $_POST['firstname'] . ' vielen Dank für die Anmeldung';
        // echo $_POST['termin'][0];
        // echo $_POST['firstname'] . ' vielen Dank für die Anmeldung';
    } else {
    ?>
        <form action="" method="POST">
            <input type="text" name="firstname">
            <input type="text" name="lastname">
            <br>
            Termin1: <input type="checkbox" name="termin[]" value="2023-12-19">
            Termin2: <input type="checkbox" name="termin[]" value="2023-12-21">
            <input type="submit" value="anmelden">
        </form>
    <?php
    }
    ?>
</body>
</html>
