<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject-陣列Array</title>
    <style>
        table,tr,td{
            border: 1px solid;
        }
    </style>
</head>
<h1>Subject-成績表</h1>
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

echo "<table>";
foreach($scores as $subject => $students){
    echo "<tr>";
    echo "<td>$subject </td>";
    foreach($students as $student => $score){
        echo "<td>$student </td>";
        echo "<td>$score </td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

<body>

</body>

</html>