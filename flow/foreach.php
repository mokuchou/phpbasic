<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach()</title>
</head>

<body>

    <?php

    $amo = [
        '國文' => 64,
        '英文' => 78,
        '數學' => 60,
        '地理' => 32,
        '歷史' => 62
    ];
    print_r($amo);
    echo '<hr>';
    ?>
    <h1>for(){}</h1>
    <?php
    $keys = array_keys($amo);
    print_r($keys);

    echo '<br>';

    for ($i = 0; $i < count($amo); $i++) {
        echo $keys[$i] . '=>';
        echo $amo[$keys[$i]];
        echo '<br>';
    }
    ?>



    <h1>foreach(){}</h1>
    <?php
    foreach ($amo as $subjuct => $score) {
        echo $subjuct . '=>' . $score;
        echo '<br>';
    }
    echo '<hr>';
    foreach ($amo as $score) {
        echo $score . ',';
        echo '<br>';
    }
    ?>
</body>

</html>