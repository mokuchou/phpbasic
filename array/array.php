<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列Array</title>
</head>

<body>
    <h1>陣列的宣告</h1>
    <?php
    // $a=array()
    // $a=[];
    $a = 1234;
    if (is_array($a)) {
        echo '$a是陣列';
    } else {
        echo '$a不是陣列';
    }
    ?>

    <h1>陣列宣告時給值</h1>
    <?php
    // $a=['A','B','C'];
    $a = ['星期一', '星期二', '星期三'];
    if (is_array($a)) {
        echo '$a是陣列<br>';
        print_r($a);
        echo '<br>';
        echo '$a[1]是' . $a[1];
    } else {
        echo '$a不是陣列';
    }
    ?>

    <h1>陣列宣告時給值並指定鍵值</h1>
    <?php
    // $a=['A','B','C'];
    $a = [
        'day1' => '星期一',
        'day2' => '星期二',
        'day3' => '星期三'
    ];
    if (is_array($a)) {
        echo '$a是陣列<br>';
        print_r($a);
        echo '<br>';
        echo '$a["day1"]是' . $a["day1"];
    } else {
        echo '$a不是陣列';
    }
    ?>

    <h1>用for印出陣列</h1>
    <?php
    // $a=['A','B','C'];
    $a = ['星期一', '星期二', '星期三'];
    if (is_array($a)) {
        echo '$a是陣列<br>';
        print_r($a);
        echo '<br>';
        // echo '$a[1]是' . $a[1];
        echo '<br>';
        for ($i = 0; $i < count($a); $i++) {
            echo '$a[' . $i . ']是' . $a[$i];
            echo '<br>';
        }
    } else {
        echo '$a不是陣列';
    }
    echo '<hr>';
    echo array_search('星期三',$a);
    echo '<hr>';
    echo serialize($a);
    echo '<hr>';
    echo implode("--",$a);
    echo '<br>';
    echo join("--",$a);
    ?>

    <h1>用for印出陣列(指定鍵值)</h1>
    <?php
    $a = [
        'day1' => '星期一',
        'day2' => '星期二',
        'day3' => '星期三'
    ];
    if (is_array($a)) {
        echo '$a是陣列<br>';
        print_r($a);
        echo '<br>';
        for ($i = 1; $i <= count($a); $i++) {
            // echo $a["day1"];
            echo '$a["day" . $i]是' . $a["day" . $i];
            echo '<br>';
        }
    } else {
        echo '$a不是陣列';
    }
    echo '<hr>';
    echo array_search('星期三',$a);
    echo array_search('星期四',$a);
    echo '<hr>';
    echo serialize($a);
    echo '<hr>';
    echo implode("--",$a);
    echo '<br>';
    echo join("--",$a);
    ?>

    <h1>explode()</h1>
    <?php
    $a = ['星期一', '星期二', '星期三'];
    if (is_array($a)) {
        echo '$a是陣列<br>';
        print_r($a);
        echo '<br>';
    } else {
        echo '$a不是陣列';
    }
    echo '<hr>';
    echo implode("--",$a);
    echo '<hr>';
    echo join("--",$a);
    echo '<hr>';
    $join=implode("--",$a);
    echo $join;
    echo '<br>';
    print_r(explode("-",$join))

    ?>

    <h1>自己練習</h1>
    <?php
    $pokemon = [1 => "妙蛙種子", 2 => "妙蛙草", 3 => "妙蛙花"];
    print_r($pokemon);
    echo '<br>';
    for ($i = 1; $i <= count($pokemon); $i++) {
        echo 'No.00' . $i . '&nbsp;' . $pokemon[$i];
        echo '<br>';
    }
    ?>

<h3>學生成績</h3>
<?php
// 方法一提示
// $ch=['judy'=>95,'amo'=>88,'john'=>45,'peter'=>59,'hebe'=>71];
// $student=['judy','amo','john','peter','hebe'];
// $ch[array_search('judy',$student)]



// 方法二提示
// $judy=['國'=>95,'英文'=>64]
// $scores=['judy'=>'judy','amo'=>'amo']



?>




</body>

</html>