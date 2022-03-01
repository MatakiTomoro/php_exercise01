<?php

$msg = '';
$msg_all = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];
}

if (empty($msg)) {
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
    <title>form_1</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br>
            <input type="number" name="message">
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