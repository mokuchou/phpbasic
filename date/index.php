<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期函式</title>
</head>

<body>
    <h1>基礎函式</h1>
    <h2>date()</h2>

    <?php
    echo date("Y-m-d", 1);
    // 起算點為 1970-01-01 的 1 秒
    echo '<br>';
    echo date("Y-m-d", 90000);
    // 起算點為 1970-01-01 的 90000 秒
    echo '<br>';
    echo date("Y/m/d", 1);
    // 可以自訂格式
    echo '<br>';
    echo date("西元Y年m月d日", 90000);
    // 可以自訂格式
    echo '<br>';
    echo date("西元Y年m月d日 H:i:s");
    // 不寫秒數，會是現在 格林威治 時間
    echo '<br>';
    ?>
    <h2>date_default_timezone_set()</h2>
    <?php
    date_default_timezone_set("Asia/Taipei");
    // 時區設定
    echo date("西元Y年m月d日 H:i:s l");
    ?>

    <h2>strtotime()</h2>

    <?php
    $now = strtotime('now');
    // 現在距離 1970-01-01 的秒數
    echo $now;
    echo '<br>';
    echo date("西元Y年m月d日 H:i:s l", $now);
    ?>

<h2>十天後的日期</h2>

<?php
$now = strtotime('now');
$ten = $now+(60*60*24)*10;
echo $ten;
echo '<br>';
echo date("西元Y年m月d日 H:i:s l", $ten);
?>

<h2>三天前的日期</h2>

<?php
$now = strtotime('now');
$three = $now-(60*60*24)*3;
echo $three;
echo '<br>';
echo date("西元Y年m月d日 H:i:s l", $three);
?>

    <ul>
        <li>練習一</li>
        <li>練習二</li>
        <li>練習三</li>
        <li>練習四</li>
        <li>練習五</li>
    </ul>
</body>

</html>