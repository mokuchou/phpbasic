<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>利用程式方式來產生陣列</title>
</head>

<body>
    <h1>利用程式方式來產生陣列</h1>
    <h3>九九乘法表</h3>
    <?php
    $ninenine = [];
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            $ninenine[$i][$j] = $i * $j;
        }
    }

    echo '<pre>';
    print_r($ninenine);
    echo '</pre>';

    // echo $ninenine[2][4];

    foreach($ninenine as $i => $array){
        foreach($array as $j => $value){
            echo "$i x $j = $value";
            echo '&nbsp;&nbsp;&nbsp;&nbsp;';
        }
        echo '<br>';
    }

    echo '<hr>';

    $ninenine = [];
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            $ninenine[$i . 'x' . $j] = $i * $j;
        }
    }

    echo '<pre>';
    print_r($ninenine);
    echo '</pre>';
    $break=0;
    foreach($ninenine as $key => $value){
        $break++;
        echo "$key = $value";
        echo '&nbsp;&nbsp;&nbsp;&nbsp;';
        // if($break%9==0){
        //     echo '<br>';
        // }
        // if($break==9){
        //     echo '<br>';
        //     $break=0;
        // }
        echo ($break%9==0)?'<br>':'';
    }
    ?>
</body>

</html>