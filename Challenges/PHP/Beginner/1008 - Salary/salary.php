<?php
    $num = fgets(STDIN); 
    $hrs = fgets(STDIN); 
    $vhr = fgets(STDIN);
    
    $sal = number_format($hrs * $vhr, 2, '.', '');
    
    echo "NUMBER = $num";
    echo "SALARY = U$ $sal\n"
?>