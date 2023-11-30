<?php
require 'inc/config.php';
require 'inc/data.php';
include 'templates/header.php';
?>
        <h1>Willkommen auf unserer <?= APPNAME ?> Applikation</h1>

        <p>Frage 1</p>
        <p><?= $question ?></p>

        <form action="answer.php" method="POST">

            <?php
            // 1. wieviele antworten?
            // 2. counter = 0
            // 3. schleifenbedingung: counter < anzahl der antworten
            // 4. in der schleife: btn ausgabe
            // 5. counter hochzählen
            for ($i = 0; $i < count($answers); $i++) {
            ?>
                <div class="mb-3">
                    <input type="checkbox" class="btn-check" name="answer[]" value="<?= $i ?>" id="button<?= $i ?>">
                    <label class="btn btn-outline-success" for="button<?= $i ?>"><?= $answers[$i] ?></label>
                </div>
            <?php
            }
            ?>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
<?php
include 'templates/footer.php';
?>
