<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date函式的參數練習</title>
</head>

<body>
    <h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>
    <div>2021/10/05</div>
    <div>10月5日 Tuesday</div>
    <div>2021-10-5 12:9:5</div>
    <div>2021-10-5 12:09:05</div>
    <div>今天是西元2021年10月5日 上班日(或假日)</div>
    <hr>
    <?php
    $date = '2021/10/05 12:9:5';
    echo '原始日期:<br>' . $date . '<br>';
    $sec = strtotime($date);

    echo date("Y/m/j", $sec) . '<br>';
    echo date("m月j日 l", $sec) . '<br>';
    echo date("Y-m-j", $sec) . '&nbsp;' . (int)date("H", $sec) . ':' . (int)date("i", $sec) . ':' . (int)date("s", $sec) . '<br>';
    echo date("Y-m-j H:i:s", $sec) . '<br>';

    echo "今天是西元" . date("Y年m月j日", $sec);
    // if(date("N",$sec)!=6 && date("N",$sec)!=7){

    // 可以利用大於小於
    // if(date("N",$sec)<6){
    //     echo " 上班日";
    // }else{
    //     echo " 假日";
    // }

    // 可以用三元運算式計算
    echo (date("N", $sec) < 6) ? " 上班日" : " 假日";

    ?>

</body>

</html>