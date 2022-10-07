<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩選號不重複</title>
    <style>
        .flex{
            display: flex;
            list-style: none;
            justify-content: space-evenly;
            width: 41px;
            height: 41px;
        }
        li{
            /* background: url('https://www.taiwanlottery.com.tw/images/twl_index_icon_ball_red.gif') no-repeat; */
            background: url('https://www.taiwanlottery.com.tw/images/twl_index_icon_ball_green.gif') no-repeat;
        }
    </style>
</head>

<body>
    <h1>威力彩-方法一</h1>
    <?php
    $a1 = [];
    $a2 = rand(1, 8);

    while (count($a1) < 6) {
        $num = rand(1, 38);
        $chk = false;
        for ($i = 0; $i < count($a1); $i++) {
            if ($a1[$i] == $num) {
                $chk = true;
            }
        }
        if ($chk == false) {
            $a1[] = $num;
        }
    }

    echo '<br>';
    echo '第一區:';
    echo '<ul class="flex">';
    for ($i=0; $i < count($a1); $i++) { 
        echo "<li>$a1[$i] </li>";
    }
    echo '</ul>';
    echo '<br>';
    echo '第二區:' . $a2;
    ?>

    <h1>威力彩-方法二</h1>
    <?php
    $a1 = [];
    $a2 = rand(1, 8);

    while (count($a1) < 6) {
        $num = rand(1, 38);
        if (!in_array($num, $a1)) {
            $a1[] = $num;
        }
    }

    echo '<br>';
    echo '第一區:' . join(',', $a1);
    echo '<br>';
    echo '第二區:' . $a2;
    ?>

    <h1>威力彩-方法三</h1>
    <?php
    $num1 = [];
    for ($i = 1; $i <= 38; $i++) {
        $num1[] = $i;
    }

    // echo join(',', $num1);
    // echo '<hr>';

    $a1 = [];
    for ($i = 0; $i < 6; $i++) {
        // $num=rand(1,count($num1));
        $index = rand(0, count($num1) - 1);
        $num = $num1[$index];
        // echo $num;
        $a1[] = $num;
        // unset($num1[array_search($num,$num1)]);
        // array_splice($num1,array_search($num,$num1),1);
        array_splice($num1, $index, 1);
        // echo '<pre>';
        // echo join(',', $num1);
        // echo '</pre>';
    }

    echo '<br>';
    echo '第一區:' . join(',', $a1);
    echo '<br>';
    echo '第二區:' . $a2;
    ?>

    <h1>威力彩-方法四</h1>
    <?php
    $num1 = [];
    for ($i = 1; $i <= 38; $i++) {
        $num1[] = $i;
    }

    // echo join(',', $num1);
    // echo '<hr>';

    $a1 = [];
    for ($i = 0; $i < 6; $i++) {
        shuffle($num1);
        // echo '<hr>打亂後的陣列';
        // print_r($num1);
        $a1[]=array_pop($num1);
        // echo '<hr>獎號目前陣列';
        // print_r($a1);

    }

    echo '<br>';
    echo '第一區:' . join(',', $a1);
    echo '<br>';
    echo '第二區:' . $a2;
    ?>

<h1>威力彩-方法五</h1>
    <?php
    $num1 = [];
    for ($i = 1; $i <= 38; $i++) {
        $num1[] = $i;
    }

    shuffle($num1);

    echo '<br>';
    echo '第一區:' . $num1[0].','.$num1[1].','.$num1[2].','.$num1[3].','.$num1[4].','.$num1[5];
    echo '<br>';
    echo '第二區:' . $a2;
    ?>

<h1>威力彩-方法六</h1>
    <?php
    $num1 = [];
    for ($i = 1; $i <= 38; $i++) {
        $num1[] = $i;
    }

    shuffle($num1);

    echo '<br>';
    echo '第一區:' . join(',',array_slice($num1,0,6));
    echo '<br>';
    echo '第二區:' . $a2;
    ?>


    <h1>老師作實驗</h1>
    <?php
    $tmp = ['A', 'B', 'C'];
    $a = array_pop($tmp);
    print_r($a);
    echo '<br>';
    print_r($tmp);

    ?>


    <h1>測試array_splice</h1>
    <?php
    $a1 = array("0" => "red", "1" => "green");
    $a2 = array("0" => "purple", "1" => "orange");
    array_splice($a1, 1, 0, $a2);
    print_r($a1);
    echo '<br>';
    print_r($a2);
    ?>
</body>

</html>