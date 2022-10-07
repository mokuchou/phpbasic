<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
    <style>
        table {
            border: 5px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        td {
            border: 1px solid #999;
        }
    </style>
</head>

<body>
    <h1>宣告陣列</h1>
    <?php
    $judy = [95, 64, 70, 90, 84];
    ?>
    <table>
        <tr>
            <td></td>
            <td>國文</td>
            <td>英文</td>
            <td>數學</td>
            <td>地理</td>
            <td>歷史</td>
        </tr>
        <tr>
            <td>judy</td>
            <?= '<td>' . $judy[0] . '</td>'; ?>
            <?= '<td>' . $judy[1] . '</td>'; ?>
            <?= '<td>' . $judy[2] . '</td>'; ?>
            <?= '<td>' . $judy[3] . '</td>'; ?>
            <?= '<td>' . $judy[4] . '</td>'; ?>
        </tr>
        <tr>
            <td>judy</td>
            <?php
            for ($i = 0; $i < count($judy); $i++) {
                echo '<td>' . $judy[$i] . '</td>';
            }
            ?>
        </tr>
    </table>
    <h1>宣告陣列</h1>
    <?php
    $title = ['', '國文', '英文', '數學', '地理', '歷史'];
    $a = ['judy', 95, 64, 70, 90, 84];
    $b = ['amo', 88, 78, 54, 81, 71];
    ?>
    <table>
        <tr>
            <?php
            for ($i = 0; $i < count($title); $i++) {
                echo '<td>' . $title[$i] . '</td>';
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i < count($a); $i++) {
                echo '<td>' . $a[$i] . '</td>';
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i < count($b); $i++) {
                echo '<td>' . $b[$i] . '</td>';
            }
            ?>
        </tr>
    </table>
    <h1>宣告陣列</h1>
    <?php
    $scores = [
        ['', '國文', '英文', '數學', '地理', '歷史'],
        ['judy', 95, 64, 70, 90, 84],
        ['amo', 88, 78, 54, 81, 71],
        ['john', 45, 60, 68, 70, 62],
        ['peter', 59, 32, 77, 54, 42],
        ['hebe', 71, 62, 80, 62, 64]
    ];
    ?>
    <table>
        <?php
        for ($i = 0; $i < count($scores); $i++) {
            echo '<tr>';
            for ($j = 0; $j < count($scores[$i]); $j++) {
                echo '<td>' . $scores[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    <h1>宣告陣列3</h1>
    <?php
    $scores = [
        '國文' => [
            'judy' => 95,
            'amo' => 88,
            'john' => 45,
            'peter' => 59,
            'hebe' => 71
        ],
        '英文' => [
            'judy' => 64,
            'amo' => 78,
            'john' => 60,
            'peter' => 32,
            'hebe' => 62
        ],
        '數學' => [
            'judy' => 70,
            'amo' => 54,
            'john' => 68,
            'peter' => 77,
            'hebe' => 80
        ],
        '地理' => [
            'judy' => 90,
            'amo' => 81,
            'john' => 70,
            'peter' => 54,
            'hebe' => 62
        ],
        '歷史' => [
            'judy' => 84,
            'amo' => 71,
            'john' => 62,
            'peter' => 42,
            'hebe' => 64
        ]
    ];

    $students = [];

    foreach ($scores as $subject => $students) {
        echo $subject;
        echo '<br>';
        foreach ($students as $name => $score) {
            echo $name . '的成績為' . $score . '<br>';
        }
        echo '<br>';
    }
    ?>
    <h1>宣告陣列4</h1>
    <?php
    $scores = [
        '國文' => [
            'judy' => 95,
            'amo' => 88,
            'john' => 45,
            'peter' => 59,
            'hebe' => 71
        ],
        '英文' => [
            'judy' => 64,
            'amo' => 78,
            'john' => 60,
            'peter' => 32,
            'hebe' => 62
        ],
        '數學' => [
            'judy' => 70,
            'amo' => 54,
            'john' => 68,
            'peter' => 77,
            'hebe' => 80
        ],
        '地理' => [
            'judy' => 90,
            'amo' => 81,
            'john' => 70,
            'peter' => 54,
            'hebe' => 62
        ],
        '歷史' => [
            'judy' => 84,
            'amo' => 71,
            'john' => 62,
            'peter' => 42,
            'hebe' => 64
        ]
    ];

    $students = [];
    $titles = array_keys($scores);
    echo '<table><tr>';
    echo '<th>aaa</th>';
    foreach ($titles as $title) {
        echo "<th>$title</th>";
    }
    echo '</tr></table>';
    


    ?>

</body>

</html>