<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {
    switch ($subject) {
        case '数学':
            $b = '明日';
            break;

        case '英語':
            $b  = '明後日';
            break;

        case '理科':
            $b  = '明後日';
            break;

        case '社会':
            $b = '昨日';
            break;

        case '国語':
            $b = '中止';
            break;


    }
    echo $subject . 'の試験は' . $b . 'です。' . '<br>';
}


