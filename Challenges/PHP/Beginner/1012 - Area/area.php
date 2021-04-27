<?php
    $valores = explode(" ", fgets(STDIN));

    $areaTriRetangulo = number_format((($valores[0] * $valores[2]) / 2), 3, '.', '');
    $areaCirculo = number_format(3.14159 * pow($valores[2], 2), 3, '.', '');
    $areaTrapezio = number_format(((($valores[0]+$valores[1]) * $valores[2]) / 2), 3, '.', '');
    $areaQuadrado = number_format(pow($valores[1], 2), 3, '.', '');
    $areaRetangulo = number_format(($valores[0] * $valores[1]), 3, '.', '');
    
    print "TRIANGULO: $areaTriRetangulo\n";
    print "CIRCULO: $areaCirculo\n";
    print "TRAPEZIO: $areaTrapezio\n";
    print "QUADRADO: $areaQuadrado\n";
    print "RETANGULO: $areaRetangulo\n";
?>