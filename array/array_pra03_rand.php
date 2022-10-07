<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩</title>
    <style>
        .green_ball {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            width: 41px;
            height: 41px;
            font-size: 20px;
            background: url('https://www.taiwanlottery.com.tw/images/twl_index_icon_ball_green.gif') no-repeat;

        }

        .red_ball {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            width: 41px;
            height: 41px;
            background: url('https://www.taiwanlottery.com.tw/images/twl_index_icon_ball_red.gif') no-repeat;
            font-size: 20px;


        }
    </style>
</head>

<body>
    <h1>威力彩</h1>
    <?php
    // echo rand(1,38).',';
    // echo rand(1,38).',';
    // echo rand(1,38).',';
    // echo rand(1,38).',';
    // echo rand(1,38).',';
    // echo rand(1,38).'<br>';
    // 這樣寫有機會重複

    $lottery = [];
    $special = rand(1,8);
    for ($i = 0; $i < 6; $i++) {
        $num = rand(1, 38);
        while (in_array($num, $lottery)) {
            $num = rand(1, 38);
        }
        $lottery[] = $num;
    }
    // print_r($lottery);
    echo "開獎結果<br>";
    foreach ($lottery as $key => $num) {
        // echo "第" . ($key + 1) . "個數字是";
        echo '<div class="green_ball">' . $num . '</div>';
        // echo "<br>";
    }
    echo '<div class="red_ball">' . $special . '</div>';
    echo "<br>";
    sort($lottery);
    // print_r($lottery);
    echo "排序後結果<br>";
    foreach ($lottery as $key => $num) {
        echo '<div class="green_ball">' . $num . '</div>';
    }
    echo '<div class="red_ball">' . $special . '</div>';
    

    // for ($i=0; $i < 6; $i++) { 
    //     echo $lottery[i];
    // }

    ?>




</body>

</html>