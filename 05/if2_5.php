<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];

foreach ($subjects as $subject) {
    echo $subject . 'の試験は';
    switch ($subject) {
        case '数学':
            echo '明日です。' . '<br>';
            break;

        case '英語':
            echo '明後日です。' . '<br>';
            break;

        case '理科':
            echo '明後日です。' . '<br>';
            break;

        case '社会':
            echo '昨日です。' . '<br>';
            break;

        case '国語':
            echo '中止です。' . '<br>';
            break;
    }
}
