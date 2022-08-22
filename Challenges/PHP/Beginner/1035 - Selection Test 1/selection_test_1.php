<?php

list($A, $B, $C, $D) = explode(' ', readline());

$A = (int)$A;
$B = (int)$B;
$C = (int)$C;
$D = (int)$D;

if ($B > $C && 
    $D > $A && 
    ($C + $D) > ($A + $B) && 
    $C > 0 && $D > 0 && 
    $A % 2 == 0
) {
    echo "Valores aceitos\n";
} else {
    echo "Valores nao aceitos\n";
}

?>