<?php
$p1 = explode(" ", fgets(STDIN));
$p2 = explode(" ", fgets(STDIN));

// sqrt - retorna a raiz quadrada
$d = sqrt(pow($p2[0] - $p1[0], 2) + pow($p2[1] - $p1[1], 2));

echo number_format(($d), 4, '.', '')."\n";
?>