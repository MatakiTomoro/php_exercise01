<?php

$score = '';
$msg = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    } elseif ($score >= 60) {
        $msg = '合格';
    } else {
        $msg = '不合格';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <?php if (empty($score)) : ?>
        <h1>点数を入力してください</h1>
    <?php endif; ?>

    <h1><?= $msg ?></h1>

    <?php if (!empty($err_msg)) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>

    <form action="" method="post">
        <input type="number" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>