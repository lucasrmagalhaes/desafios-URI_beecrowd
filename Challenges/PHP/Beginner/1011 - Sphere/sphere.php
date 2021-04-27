<?php
    $pi = 3.14159;
    $raio = fgets(STDIN);

    $volume = number_format((4.0 / 3) * $pi * pow($raio, 3), 3, '.', '');
    
    echo "VOLUME = $volume\n";
?>