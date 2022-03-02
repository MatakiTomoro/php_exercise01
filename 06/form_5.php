<?php

$msg = '';
$num1 = '';
$num2 = '';
$num3 = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['num1']) || empty($_POST['num2']) || empty($_POST['num3'])) {
        $err_msg = '全てに数字を入力して下さい。';
    } else {
        $result = $_POST['num1'] + $_POST['num2'] + $_POST['num3'];
        $msg = '合計値は' . $result . 'です';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_5</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <?php if ($err_msg) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
    <?php endif; ?>
    <form action="" method="POST">
        <div>
            <label for="num1">1つめの数字</label>
            <input type="number" name="num1" id="num1">
        </div>
        <div>
            <label for="num2">2つめの数字</label>
            <input type="number" name="num2" id="num2">
        </div>
        <div>
            <label for="num3">3つめの数字</label>
            <input type="number" name="num3" id="num3">
        </div>
        <input type="submit" value="送信">
    </form>
    <p><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>