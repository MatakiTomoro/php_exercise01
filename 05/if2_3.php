<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

echo '私は、' . '<br>';

foreach ($foods as $eating_time => $food) {
    echo $eating_time . 'に' . $food . '<br>';
}

echo 'を食べます';
