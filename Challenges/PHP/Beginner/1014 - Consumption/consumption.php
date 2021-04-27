<?php

$km = (int) fgets(STDIN);
$litros = (float) fgets(STDIN);

echo number_format(($km / $litros), 3, '.', '') . " km/l\n";

?>