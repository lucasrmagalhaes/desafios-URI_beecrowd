<?php
    $a = fgets(STDIN);
    $b = fgets(STDIN);
    $c = fgets(STDIN);
    $d = fgets(STDIN);

    $diff = (($a * $b) - ($c * $d));
    
    echo "DIFERENCA = $diff\n";
?>