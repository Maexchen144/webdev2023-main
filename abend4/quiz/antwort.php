<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 1. Prüfe, ob das $_POST Array Werte beinhaltet (count)
            // Wenn ja: 2. Prüfe, ob die richtige Antwort "antwort2" enthalten ist mit der value "richtig"
                // Wenn ja: Ausgabe: korrekt
            // Wenn nicht: Ausgabe: Antwort nicht korrekt
        // Wenn nicht: Fehlermeldung

        if ( count($_POST) > 0 )
        {
            if ( isset( $_POST['antwort2'] ) && $_POST['antwort2'] === 'on' )
            {
                echo 'Richtig!';
            }
            else
            {
                echo 'Falsch!';
            }

            // Wenn ja: 2. Prüfe, ob die richtige Antwort "antwort2" enthalten ist mit der value "richtig"
                // Wenn ja: Ausgabe: korrekt
            // Wenn nicht: Ausgabe: Antwort nicht korrekt
        }
        else
        {
            echo 'Bitte wählen Sie eine Antwort!';
        }
    ?>
</body>
</html>
