<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_元素順序反轉</title>
</head>
<body>
    <h1>Array_元素順序反轉</h1>
<?php
    $a=[2,4,6,1,8];
    // $a=[9,8,7,6];
    // $a=[3,5,8,7,1,4];
    // if(count($a)%2==0){
    //     $mid=(count($a)-1)/2;
    // }else{
    //     $mid=(count($a)-1)/2;
    // }
    // echo $mid;
    for ($i=0; $i < count($a); $i++) { 
        $a[]=$a[0];
        foreach($a as $key => $num){
            if($key!=(count($a)-1)){
                $a[$key]=$a[$key+1];
            }else{
                unset($a[count($a)-1]);
            }
        }
    }
print_r($a);


    ?>
</body>
</html>