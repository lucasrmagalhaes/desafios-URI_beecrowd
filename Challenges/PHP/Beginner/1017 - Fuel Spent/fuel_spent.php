<?php
$timeHours = (int) fgets(STDIN);
$kmH = (int) fgets(STDIN);

$kmL = $kmH * $timeHours; 
$liters = ($kmL / 12);

echo number_format(($liters), 3, '.', '') . "\n";
?>