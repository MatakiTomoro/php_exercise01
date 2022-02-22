<?php

$num =3;

if ($num == 1) {
    echo "1は素数ではありません";
    exit;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        echo $num . "は素数ではありません";
        exit;
    }
}

echo $num . "は素数です";