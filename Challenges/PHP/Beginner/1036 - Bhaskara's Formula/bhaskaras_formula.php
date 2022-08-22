<?php

list($A, $B, $C) = explode(' ', readline());

$A = (float)$A;
$B = (float)$B;
$C = (float)$C;

if ($A == 0 || ($B * $B - 4 * $A * $C) < 0) {
  echo "Impossivel calcular\n";
} else {
  $Z = sqrt($B * $B - 4 * $A * $C);

  $X1 = (-$B + $Z) / (2 * $A);
  $X2 = (-$B - $Z) / (2 * $A);

  echo "R1 = " . number_format($X1, 5, '.', '') . "\n";
  echo "R2 = " . number_format($X2, 5, '.', '') . "\n";
}

?>