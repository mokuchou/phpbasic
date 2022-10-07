<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閏年判斷</title>
</head>
<body>
<div style="background-color: orange;"><h1>閏年查詢</h1></div>
<form action="" method="get">
    請輸入欲查詢的年份：
    <input type="number" name="year">年
    <input type="submit" name="send" value="查詢">
</form>
<br>
<?php

if(isset($_GET['send'])){
    $year=$_GET['year'];
    // $year=3200;

    if(($year%4==0 && $year%100!=0) || $year%400==0){
        echo $year."年 是閏年。";
    }else{
        // if($year%400==0){
        //     echo $year."年 是閏年。";
        // }else{
        //     echo $year."年 不是閏年。";
        // }
        echo $year."年 不是閏年。";
    }
}
?>

</body>
</html>