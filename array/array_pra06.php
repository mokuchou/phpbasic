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
    $array = [2, 4, 6, 1, 8];
    echo "原陣列 => [".join(',',$array)."]<br>";
    for ($i=0; $i < floor(count($array)/2); $i++) { 
        $t=$array[$i];
        $array[$i]=$array[count($array)-1-$i];
        $array[count($array)-1-$i]=$t;
        echo $i."=>[".join(',',$array)."]<br>";
    }

    ?>
</body>

</html>