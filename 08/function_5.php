<?php

$week = [
    '日',
    '月',
    '火',
    '水',
    '木',
    '金',
    '土',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_ymd = date('Y年m月d日');
    $date_w = $week[date('w')];
    $today = $date_ymd . $date_w;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function_5</title>
</head>

<body>
    <? if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <h1><?= '今日は、' . $today . '曜日です'?></h1>
        <div>
            <a href="function_5.php">戻る</a>
        </div>
    <? else : ?>
        <h2>本日の日付、曜日を確認しますか？</h2>
        <form action="" method="POST">
            <input type="submit" value="はい">
        </form>
    <? endif; ?>
</body>

</html>