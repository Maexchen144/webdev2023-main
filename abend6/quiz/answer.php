<?php
require 'inc/config.php';
require 'inc/data.php';
include 'templates/header.php';

if ($_POST['answer'] == $correct) {
    echo 'RICHTIG!';
} else {
    echo 'FALSCH!';
}

include 'templates/footer.php';
?>
