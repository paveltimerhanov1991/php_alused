<?php
// muutujate defineerimine
// $muutujaNimi = väärtus;

$taisArv = 7;
$reaalArv = 3.14;
$sone = '7';
$toevaartusTrue = true;
$toevaartusFalse = false;

echo 'Täisarv = ' .$taisArv. '<br>';
echo 'reaalArv = ' .$reaalArv. '<br>';
echo 'Sõna = ' .$sone. '<br>';
echo 'Tõeväärsus = ' .$toevaartusFalse. '<br>';
echo 'Tõeväärsus = ' .$toevaartusTrue. '<br>';

echo gettype($sone). '<br>';
settype($sone, 'int');
echo gettype($sone).'<br>';