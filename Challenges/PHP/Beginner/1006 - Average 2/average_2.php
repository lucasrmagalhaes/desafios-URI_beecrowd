<?php
    $nota1 = fgets(STDIN) * 2;
    $nota2 = fgets(STDIN) * 3;
    $nota3 = fgets(STDIN) * 5;
    
    $media = number_format(($nota1 + $nota2 + $nota3) / 10, 1, '.', '');
    
    echo "MEDIA = $media\n";
?>