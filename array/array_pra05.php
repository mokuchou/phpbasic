<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>天干地支</title>
    <style>

    </style>
</head>

<body>
    <h1>天干地支-適合看分配，不適合查詢年份</h1>
    <?php
    $a = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
    $b = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
    $years = [];

    for ($i = 0; $i < 60; $i++) {
        $years[$a[$i % 10]][$b[$i % 12]] = $i;
    }

    // echo '<pre>';
    // print_r($years);
    // echo '</pre>';

    echo '丁亥年為第' . $years['丁']['亥'] . '年';
    ?>

    <h1>天干地支-適合看分配，不適合查詢年份</h1>
    <?php
    $a = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
    $b = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
    $years2 = [];
    for ($i = 0; $i < 60; $i++) {
        $years2[$a[$i % 10] . $b[$i % 12]] = $i;
    }
    // echo '<pre>';
    // print_r($years2);
    // echo '</pre>';
    echo '丁亥年為第' . $years2['丁亥'] . '年';
    ?>

    <h1>天干地支-查詢年份-自己練習</h1>
    <?php
    $a = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
    $b = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
    $years3 = [];
    for ($i = 0; $i < 60; $i++) {
        $years3[$i] = $a[$i % 10] . $b[$i % 12];
    }
    echo '<pre>';
    print_r($years3);
    echo '</pre>';
    ?>
    <form action="" method="post">
        <input type="number" name="testYear" min="0" placeholder="請輸入西元年">
        <input type="submit" name="send" value="查詢天干地支">
    </form>
    <?php
    $testYear = 1024;
    if (isset($_POST['send'])) {
        $testYear = $_POST['testYear'];
    }
    $tYear = $testYear % 1024 % 60;
    echo $testYear . '年為';
    echo '<font style="background-color: lightblue;font-size:24px;">'.$years3[$tYear].'</font>';
    echo '年';
    ?>


<h1>天干地支-查詢年份-老師解答</h1>
    <?php
    $a = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
    $b = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
    $years4 = [];
    $startYear=1024;
    $inputYear=2153;
    for ($i = 0; $i < 60; $i++) {
        $years4[$i] = $a[$i % 10] . $b[$i % 12];
    }
    // echo '<pre>';
    // print_r($years4);
    // echo '</pre>';

    echo $inputYear.'年為'.$years4[($inputYear-$startYear)%60].'年';
    ?>

<h1>(待解決)天干地支-查詢年份-輸入1024年以前 或 西元前?</h1>
    <?php
    $a = ['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
    $b = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
    $years4 = [];
    $startYear=1024;
    $inputYear=2153;
    for ($i = 0; $i < 60; $i++) {
        $years4[$i] = $a[$i % 10] . $b[$i % 12];
    }
    // echo '<pre>';
    // print_r($years4);
    // echo '</pre>';

    echo $inputYear.'年為'.$years4[($inputYear-$startYear)%60].'年';
    ?>
</body>

</html>