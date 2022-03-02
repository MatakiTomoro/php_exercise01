<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['item_key'];

    if (empty($name)) {
        $err_msgs[] = '氏名を入力してください';
    }

    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力してください';
    }

    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力してください';
    }

    if (empty($err_msgs)) {
        header('Location: confirm.php?purchase_item=' . $items[$item_key]);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_2.5</title>
</head>

<body>
    <h3>個人情報を入力してください</h3>
    <?php if ($err_msgs) : ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_msgs as $err_msg) : ?>
                <li><?= $err_msg ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="">氏名</label><br>
        <input type="text" name="name" value="<?= $name ?>"><br>
        <label for="">電話番号</label><br>
        <input type="tel" name="tel" value="<?= $tel ?>"><br>
        <label for="">メールアドレス</label><br>
        <input type="email" name="email" value="<?= $email ?>">

        <h3>購入するものを選択してください</h3>
        <select name="item_key">
            <?php foreach ($items as $key => $item) : ?>
                <option value="<?= $key ?>"><?= $item ?></option>
            <?php endforeach; ?>
        </select>

        <br>
        <div class=" submit">
            <input type="submit" value="送信">
        </div>
    </form>

</body>

</html>