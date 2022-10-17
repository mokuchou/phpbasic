<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>間隔天數計算</title>
</head>

<body>
    <h1>間隔天數計算</h1>
    設有兩個日期：<br>
    2022-09-10<br>
    2022-10-21<br>
    請計算間隔日數：<br>
    註：從開始日的凌晨0時0分0秒計算到結尾日的晚上23時59分59秒
    <?php
    $a = '2022-09-10';
    $b = '2022-10-21';
    $aa = strtotime($a);
    $bb = strtotime($b . "23:59:59") + 1;
    $ans1 = ($bb - $aa) / (60 * 60 * 24) - 1;
    $ans2 = ($bb - $aa) / (60 * 60 * 24);
    $ans3 = ($bb - $aa) / (60 * 60 * 24) - 1 - 1;
    ?>

    <div>包含起始日：<?=$ans2;?>天</div>
    <div>不包含起始日：<?=$ans1;?>天</div>
    <div>不包含結束日：<?=$ans3;?>天</div>



    <h3>包含尾不含頭 天數</h3>
    <?php
    $a = '2022-09-10';
    $b = '2022-10-21';

    $a_second = strtotime($a);
    $b_second = strtotime($b);

    $result = ($b_second - $a_second) / 60 / 60 / 24;
    echo '間隔' . $result . '天';
    ?>

    <h3>不含頭不含尾 天數</h3>
    <?php
    $a = '2022-09-10';
    $b = '2022-10-21';

    $a_second = strtotime($a);
    $b_second = strtotime($b);

    $result = ($b_second - $a_second) / 60 / 60 / 24 - 1;
    echo '間隔' . $result . '天';
    ?>

    <h3>包含頭尾 天數</h3>
    <?php
    $a = '2022-09-10';
    $b = '2022-10-21';

    $a_second = strtotime($a);
    $b_second = strtotime($b);

    $result = (($b_second - $a_second) / 60 / 60 / 24) + 1;
    echo '間隔' . $result . '天';
    ?>
</body>

</html>