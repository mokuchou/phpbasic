<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算連續五個周一的日期</title>
</head>

<body>
    <h1>w-利用迴圈來計算連續五個周一的日期</h1>
    <p>今天是<?= date("Y-m-d l"); ?></p>
    <hr>
    <?php
    $w = (date("w") == 0) ? 7 : date("w");
    $diff = 1 - $w;
    // echo "現在距離週一" . (1 - $w) . '天<br>';
    // for ($i = 0; $i < 7; $i++) {
    //     echo "1-$i = " . (1 - $i) . '<br>';
    // }
    // $firstDay = strtotime("+$diff days");
    // echo date("Y-m-d l", $firstDay);
    // echo '<hr>';

    for ($i = 0; $i < 5; $i++) {
        $sec = strtotime("+$diff days" . "+" . ($i + 1) . " week");
        echo date("Y-m-d l", $sec) . '<br>';
    }
    ?>
    <hr>
    <h1>N-利用迴圈來計算連續五個周一的日期</h1>
    <p>今天是<?= date("Y-m-d l"); ?></p>
    <hr>
    <?php
    $n = date("N");
    $diff = 1 - $n;
    echo "現在距離週一" . (1 - $n) . '天<br>';
    // for ($i = 0; $i < 7; $i++) {
    //     echo "1-$i = " . (1 - $i) . '<br>';
    // }
    // $firstDay = strtotime("+$diff days");
    // echo date("Y-m-d l", $firstDay);
    // echo '<hr>';

    for ($i = 0; $i < 5; $i++) {
        $sec = strtotime("+$diff days" . "+" . ($i + 1) . " week");
        echo date("Y-m-d l", $sec) . '<br>';
    }
    ?>

</body>

</html>