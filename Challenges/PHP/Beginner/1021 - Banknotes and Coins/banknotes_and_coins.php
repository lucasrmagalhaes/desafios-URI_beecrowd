<?php
$valor = fgets(STDIN) * 100;
$notas = array(0, 0, 0, 0, 0, 0);
$moedas = array(0, 0, 0, 0, 0, 0);

while($valor != 0) {
    switch($valor) {
        case $valor >= 10000:
            $notas[0] = intval($valor / 10000);
            $valor %= 10000;
            break;
        case $valor >= 5000:
            $notas[1] = intval($valor / 5000);
            $valor %= 5000;
            break;
        case $valor >= 2000:
            $notas[2] = intval($valor / 2000);
            $valor %= 2000;
            break;
        case $valor >= 1000:
            $notas[3] = intval($valor / 1000);
            $valor %= 1000;
            break;
        case $valor >= 500:
            $notas[4] = intval($valor / 500);
            $valor %= 500;
            break;
        case $valor>=200:
            $notas[5] = intval($valor / 200);
            $valor %= 200;
            break;
        case $valor>=100:
            $moedas[0] = intval($valor / 100);
            $valor %= 100;
            break;
        case $valor>=50:
            $moedas[1] = intval($valor / 50);
            $valor %= 50;
            break;
        case $valor>=25:
            $moedas[2] = intval($valor / 25);
            $valor %= 25;
            break;
        case $valor>=10:
            $moedas[3] = intval($valor / 10);
            $valor %= 10;
            break;
        case $valor>=5:
            $moedas[4] = intval($valor / 5);
            $valor %= 5;
            break;
        case $valor>=1:
            $moedas[5] = intval($valor / 1);
            $valor %= 1;
            break;
    }
}

echo "NOTAS:\n";
echo $notas[0] . " nota(s) de R$ 100.00\n";
echo $notas[1] . " nota(s) de R$ 50.00\n";
echo $notas[2] . " nota(s) de R$ 20.00\n";
echo $notas[3] . " nota(s) de R$ 10.00\n";
echo $notas[4] . " nota(s) de R$ 5.00\n";
echo $notas[5] . " nota(s) de R$ 2.00\n";

echo "MOEDAS:\n";
echo $moedas[0] . " moeda(s) de R$ 1.00\n";
echo $moedas[1] . " moeda(s) de R$ 0.50\n";
echo $moedas[2] . " moeda(s) de R$ 0.25\n";
echo $moedas[3] . " moeda(s) de R$ 0.10\n";
echo $moedas[4] . " moeda(s) de R$ 0.05\n";
echo $moedas[5] . " moeda(s) de R$ 0.01\n";
?>