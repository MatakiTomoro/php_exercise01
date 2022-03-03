<?php

function check_temperature($body_temperature)
{
    if ($body_temperature < 37) {
        return "true";
    } else {
        return "faulse";
    }
}

function create_message($body_temperature)
{
    check_temperature($body_temperature);
    
    if ($body_temperature < 37) {
        return "あなたは平熱なので、問題なく参加できます";
    } else {
        return "あなたは発熱しているので、参加できません";
    }
}

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body_temperature = $_POST["body_temperature"];
    $msg = create_message($body_temperature);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function_4</title>
</head>

<body>
    <?php if ($msg) : ?>
        <h1><?= $msg ?></h1>
    <?php endif; ?>

    <h2>体温を入力してください</h2>
    <form action="" method="POST">
        <input type="number" name="body_temperature">
        <input type="submit" value="送信">
    </form>
</body>

</html>