<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
</head>
<body>
<h1>自己做九九乘法表(未完成)</h1>
我想要...
<form action="#" method="post">
    <input type="number" name="j"> X <input type="number" name="i"> 的乘法表
    <br>
    <input type="submit" name="send">
</form>
<?php
if(isset($_POST['send'])){
    echo '<table border=1 style="text-align:center;background-color: #eee;font-size: 24px;" width="85%">';

        for($j=0;$j<=$_POST['j'];$j++){
            echo "<tr>";
            for($i=0;$i<=$_POST['i'];$i++){
                if($j==0){
                    echo '<th style="background-color: #eef;">';
                    if($i!=0){
                        echo $i;
                    }
                    echo "</th>";
                }else if($i==0){
                    echo '<th style="background-color: #eef;">';
                    if($j!=0){
                        echo $j;
                    }
                    echo "</th>";
                }else if($i>=$j){
                    echo "<td>";
                    echo ( $i*$j );
                    echo "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
}
?>
    
</body>
</html>