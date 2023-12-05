<?php
$age = 40;

// Zusatzabfrage im Else Block kann so formuliert werden:
if ($age < 16) {
    echo 'Sie sind noch nicht wahlberechtigt.<br>';
}
else {
    if ($age > 90) {
        echo 'Falls Sie nicht mobil sind, wird Ihre Wahlkarte Ihrer Vertrauensperson zugestellt!<br>';
    }
    else {
        echo 'Vielen Dank - Ihre Wahlkarte wird Ihnen zugesendet!<br>';
    }
}

// Als Abkürzung gibt es auch die "elseif" Variante:
if ($age < 16) {
    echo 'Sie sind noch nicht wahlberechtigt.<br>';
}
elseif ($age > 90) {
    echo 'Falls Sie nicht mobil sind, wird Ihre Wahlkarte Ihrer Vertrauensperson zugestellt!<br>';
}
else {
    echo 'Vielen Dank - Ihre Wahlkarte wird Ihnen zugesendet!<br>';
}
