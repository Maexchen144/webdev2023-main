<?php
$anzahl = 3;

// Als Abkürzung gibt es auch die "elseif" Variante:
if ($anzahl === 1) {
    echo 'Gesamtpreis: 16,-<br>';
}
elseif ($anzahl === 2) {
    echo 'Gesamtpreis mit Rabatt: 29,-<br>';
}
elseif ($anzahl === 3) {
    echo 'Gesamtpreis mit Rabatt: 40,-<br>';
}
elseif ($anzahl === 4) {
    echo 'Gesamtpreis mit Rabatt: 49,-<br>';
}
else {
    $gesamtpreis = $anzahl * 16 - 20;
    echo "Gesamtpreis mit Rabatt: $gesamtpreis";
}

switch ($anzahl) {
    case 1:
        echo 'Gesamtpreis: 16,-<br>';
        break;
    case 2:
        echo 'Gesamtpreis mit Rabatt: 29,-<br>';
        break;
    case 3:
        echo 'Gesamtpreis mit Rabatt: 40,-<br>';
        break;
    case 4:
        echo 'Gesamtpreis mit Rabatt: 49,-<br>';
        break;
    default:
        $gesamtpreis = $anzahl * 16 - 20;
        echo "Gesamtpreis mit Rabatt: $gesamtpreis";
}
