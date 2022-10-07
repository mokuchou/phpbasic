<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表練習</title>
</head>
<body>
<h1>練習1</h1>
<?php
for($i=1;$i<=9;$i++){
    echo '1'.'*'.$i.'='.(1*$i).'<br>';
}
for($i=1;$i<=9;$i++){
    echo '2'.'*'.$i.'='.(2*$i).'<br>';
}

?>



<h1>乘法表練習-只要顯示一半</h1>

<table border=1 style="text-align:center;background-color: #eef;font-size: 24px;" width="85%">
    <?php
    for($j=0;$j<=9;$j++){
        echo "<tr>";
        for($i=0;$i<=9;$i++){
            if($j==0){
                echo '<th style="background-color: #eee;">';
                if($i!=0){
                    echo $i;
                }
                echo "</th>";
            }else if($i==0){
                echo '<th style="background-color: #eee;">';
                if($j!=0){
                    echo $j;
                }
                echo "</th>";
            // }else if($i>=$j){
            }else if($i>=$j){
                echo "<td>";
                echo ( $i*$j );
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>






<h1>乘法表練習</h1>

<table border=1 style="text-align:center;background-color: #eef;font-size: 24px;" width="85%">
    <?php
    for($j=0;$j<=9;$j++){
        echo "<tr>";
        for($i=0;$i<=9;$i++){
            if($j==0){
                echo '<th style="background-color: #eee;">';
                if($i!=0){
                    echo $i;
                }
                echo "</th>";
            }else if($i==0){
                echo '<th style="background-color: #eee;">';
                if($j!=0){
                    echo $j;
                }
                echo "</th>";
            }else{
                echo "<td>";
                echo ( $i*$j );
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

<h1>練習</h1>

<table border=1 style="background-color: #eef;" width="85%">
    <?php
    for($j=1;$j<=9;$j++){
        echo "<tr>";
        for($i=1;$i<=9;$i++){
            echo "<td>";
            echo $i . '*' . $j . '=' . ( $i*$j );
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>



<h1>乘法表</h1>
<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        echo $j.'*'.$i.'='.($i*$j).',';
    }
    echo '<br>';
}

?>
<h1>乘法表</h1>
<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        echo $i.'*'.$j.'='.($i*$j).',';
    }
    echo '<br>';
}

?>
<h1>乘法表</h1>
<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        echo $i.'*'.$j.'='.($i*$j).',';
    }
}

?>
<h1>乘法表</h1>
<?php
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        echo $i.'*'.$j.'='.($i*$j).'<br>';
    }
}



?>
    
</body>
</html>