<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-陣列Array</title>
</head>
<h1>Student-成績表</h1>
<?php
$scores = [
    'judy' => [
        '國文' => 95,
        '英文' => 88,
        '數學' => 45,
        '地理' => 59,
        '歷史' => 71
    ],
    'amo' => [
        '國文' => 64,
        '英文' => 78,
        '數學' => 60,
        '地理' => 32,
        '歷史' => 62
    ],
    'john' => [
        '國文' => 70,
        '英文' => 54,
        '數學' => 68,
        '地理' => 77,
        '歷史' => 80
    ],
    'peter' => [
        '國文' => 90,
        '英文' => 81,
        '數學' => 70,
        '地理' => 54,
        '歷史' => 62
    ],
    'hebe' => [
        '國文' => 84,
        '英文' => 71,
        '數學' => 62,
        '地理' => 42,
        '歷史' => 64
    ]
];
// $i=0;
// echo '<table border="1"><tr>';
// foreach ($scores as $students => $subjects) {
//     foreach ($subjects as $subject => $score) {
//         $i++;
//         if($i==1){
//             echo '<tr>';
//             for ($j=0; $j < count($subjects); $j++) { 
//                 echo '<td></td>';
//                 echo '<td>'.$subject[$j].'</td>';
//             }
//             echo '</tr>';
//         }
//         echo '<td>'.$students.'</td>';
//         echo '<td>'.$score.'</td>';
//     }
//     echo '</tr><tr>';
// }
// echo '</tr></table>';
$i=0;
foreach($scores as $students => $array){
    echo ($i!=0)?$students:'';
    foreach ($array as $subject => $score) {
        if($i==0){
            for ($j=0; $j < count($array); $j++) { 
                echo $subject.'<br>';
                $i++;
            }
        }
        echo $score.'<br>';
    }
}

?>

<body>

</body>

</html>