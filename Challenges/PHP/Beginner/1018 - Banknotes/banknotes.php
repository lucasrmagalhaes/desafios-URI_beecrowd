<?php
$note_list = array(100, 50, 20, 10, 5, 2, 1);

$money = readline();

echo $money . "\n";

for ($i = 0; $i < 7; $i++) {
    $count =  $money / $note_list[$i];
    
    echo (int) $count . " nota(s) de R$ " . $note_list[$i] . ",00\n";
    
    $money %= $note_list[$i];
}
?>