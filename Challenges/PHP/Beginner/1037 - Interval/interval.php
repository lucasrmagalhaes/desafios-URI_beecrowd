<?php

$A = (float)readline();

if ($A >= 0 && $A <= 100) {
  if ($A >= 0 && $A <= 25.0000) {
    echo "Intervalo [0,25]\n";
  } else if ($A >= 25.0001 && $A <= 50.0000) {
    echo "Intervalo (25,50]\n";
  } else if ($A >= 50.0001 && $A <= 75.0000) {
    echo "Intervalo (50,75]\n";
  } else {
    echo "Intervalo (75,100]\n";
  }
} else {
  echo "Fora de intervalo\n";
}

?>