<?php
$tempo = (int) fgets(STDIN);
$horario = array(0, 0, 0);

while($tempo > 0) {
    switch($tempo) {
        case $tempo < 60:
            $horario[2] = $tempo;
            $tempo = 0;
        break;
        case $tempo < 3600:
            $horario[1] = (int) ($tempo / 60);
            $tempo %= 60;
        break;
        default:
            $horario[0] = (int) ($tempo / 3600);
            $tempo %= 3600;
    }
}

echo $horario[0] . ":" . $horario[1] . ":" . $horario[2] . "\n";
?>