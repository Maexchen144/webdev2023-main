<?php
/**
 * Operatoren - laufende Erweiterung bei Anwendung
 */

// Zuweisungsoperatoren (vrnl)
$x = 1;

// Stringoperatoren
$str1 . $str2; // Strings zusammenfügen
'string1' . 'string2'; // ergibt: 'string1string2'

// Mathematische Operatoren, sowie Increment, Decrement
$x + $y;
$x++; // Increment - der Ausdruck $x ergibt aber noch den "alten" Wert, und wird danach um 1 erhöht.
++$x;  // Increment - der Ausdruck $x ergibt schon den um 1 erhöhten Wert.
$x--; // Decrement - wie oben, aber -1.
--$x;  // Decrement - wie oben, aber -1.

// Vergleichsoperatoren - ALLE diese liefern BOOL (true / false)
$x == $y; // Prüfung auf Wertegleichheit (ggf. mit dynamischer Typenkonvertierung)
$x === $y; // Prüfung auf Werte- UND Datentypgleichheit = Identitätsoperator
$x > $y;
$x >= $y;
$x < $y;
$x <= $y;

// Logische Operatoren

// Array Operatoren
