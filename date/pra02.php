<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算自己的生日還有幾天</title>
</head>

<body>
    <h1>計算自己的生日還有幾天</h1>
    <?php
    $birth = '2023-10-14';
    $now = strtotime('now');
    // echo strtotime($birth) . '-' . $now;
    $diff = $now - strtotime($birth);
    $days = abs(floor($diff / 86400));
    $hours = abs(floor(($diff%86400) / 3600));
    $min = abs(floor(($diff%3600) / 60));
    $sec = abs($diff%60);
    echo $diff;
    echo '<br>';
    echo $days;
    ?>
    <?php
    if ($diff > 0) {
    ?>
        <h4>我的生日 2023/10/14 已經過了<?= $days; ?>天<?= $hours; ?>時<?= $min; ?>分<?= $sec; ?>秒</h4>
    <?php
    } else {
    ?>
        <h4>距離我的生日 2023/10/14 還有<?= $days; ?>天<?= $hours; ?>時<?= $min; ?>分<?= $sec; ?>秒</h4>
    <?php
    }
    ?>



    <h1>計算自己的生日還有幾天</h1>
    <?php
    $birthday = '2023-10-14';
    $birthday_second = strtotime($birthday);
    $now = 'now';
    $now_second = strtotime($now);
    $ans = $birthday_second - $now_second;
    $days = floor($ans / 86400);
    $hours = floor(($ans%86400) / 3600);
    $min = floor(($ans%3600) / 60);
    $sec = $ans%60;
    echo $ans;
    echo '<br>';
    echo $days;


    echo '<hr>';

    echo floor(-2.5);
    echo '<br>';
    echo floor(2.5);
    ?>
    <div>距離我的生日 2023/10/14 還有<?= $days; ?>天<?= $hours; ?>時<?= $min; ?>分<?= $sec; ?>秒</div>



</body>

</html>