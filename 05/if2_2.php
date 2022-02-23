<?php

$poket_money = 1000;
$fund_raising = 101;

echo 'あなたの所持金は1000円です。' . '<br>';

do {
    echo '101円募金しました。' . '<br>';
    $poket_money = $poket_money - $fund_raising;
    echo '残り残高は' . $poket_money . '円です。' . '<br>';
} while ($poket_money >= $fund_raising);

echo 'あなたはこれ以上募金できません。';
