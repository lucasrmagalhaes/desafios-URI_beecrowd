<?php
    fgets(STDIN);
    
    $sal = fgets(STDIN);
    $ven = fgets(STDIN);

    /**
     * PHP_ROUND_HALF_EVEN	
     * Rounds val towards the nearest even value when it is half way there, making both 1.5 and 2.5 into 2.
     * Arredonda val para o valor par mais próximo quando ele está na metade do caminho, transformando 1,5 e 2,5 em 2.
     */

    $tot = number_format(round($sal + ($ven * 0.15), 2, PHP_ROUND_HALF_EVEN), 2, '.', '');
    
    echo "TOTAL = R$ $tot\n";
?>