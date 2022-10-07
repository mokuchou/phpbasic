<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旋轉陣列</title>
</head>
<body>
    <h1>旋轉陣列</h1>
    <h5>給定一個陣列有K個元素及旋轉N次，最後回傳旋轉完成的陣列</h5>
<?php
    $array=[3,2,1,5,6];
    // =>[1,5,6,3,2];
    $n=3;
    $k=count($array);
    $t=0;
    echo "原陣列=>[".join(',',$array)."]<br>";
    for ($i=0; $i < $n; $i++) { 
        $t=$array[$k-1];
        // echo $t;
        for ($j=0; $j < $k; $j++) { 
            if(($k-2-$j)>=0){
                $array[$k-1-$j]=$array[$k-2-$j];
            }else{
                $array[$k-1-$j]=$t;
            }
        }
        echo "[".join(',',$array)."]<br>";
    }
?>
</body>
</html>