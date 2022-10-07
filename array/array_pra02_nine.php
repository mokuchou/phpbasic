<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_九九乘法表</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid;
            text-align: center;
            font-size: 20px;
        }

        th,
        td {
            width: 30px;
            height: 30px;
        }

        th {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h1>Array_九九乘法表</h1>
    <?php
    for ($i = 1; $i <= 9; $i++) {
        $nine[$i] = [];
        for ($j = 1; $j <= 9; $j++) {
            $result = $i * $j;
            $nine[$i][$j] = $result;
        }
    }
    echo '<table border="1">';
    foreach ($nine as $i => $math) {
        if ($i == 1) {
            echo '<tr>';
            echo '<th></th>';
            foreach ($math as $j => $anwser) {
                echo '<th>' . $j . '</th>';
            }
            echo '</tr>';
        }
        echo '<tr>';
        echo '<th>' . $i . '</th>';
        foreach ($math as $j => $anwser) {
            echo '<td>' . $anwser . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    echo '<pre>';
    print_r($nine);
    echo '<pre>';

    ?>

</body>

</html>