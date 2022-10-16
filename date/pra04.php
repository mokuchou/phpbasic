<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算連續五個周一的日期</title>
</head>

<body>
    <h1>利用迴圈來計算連續五個周一的日期</h1>
    <p>今天是<?=date("Y-m-d l");?></p>
    <div>2022-10-24 星期一</div>
    <div>2022-10-31 星期一</div>
    <div>2022-11-07 星期一</div>
    <div>2022-11-14 星期一</div>
    <div>2022-11-21 星期一</div>
    <hr>
    <?php
    $w=date("w");
    $diff=1-$w;
    echo "現在距離週一".(1-$w).'天<br>';
    for ($i=0; $i < 7; $i++) { 
        echo "1-$i = ".(1-$i).'<br>';
    }
    $firstDay=strtotime("+$diff days");
    echo date("Y-m-d l",$firstDay);
    echo '<hr>';

    for ($i=0; $i < 5; $i++) { 
        $sec=strtotime("+".($i+1)." week");
        echo date("Y-m-d l",$sec).'<br>';
    }


    ?>

</body>

</html>