<?php

$msg = '';
$msg_all = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
}

if (empty($msg)) {
    $err_msg = '年齢を入力してください';
} else {
    $msg_all = '私は' . htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') . '歳です。';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_3</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <?php if ($err_msg) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br>
            <input type="number" name="message" value="<?= $msg ?>">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?= $msg_all ?>
    </div>
</body>

</html>