<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列-學生成績</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>學生成績</h3>
    <?php
    // $ch=['judy'=>95,'amo'=>88,'john'=>45,'peter'=>59,'hebe'=>71];
    // $en=['judy'=>64,'amo'=>78,'john'=>60,'peter'=>32,'hebe'=>62];
    // $ma=['judy'=>70,'amo'=>54,'john'=>68,'peter'=>77,'hebe'=>80];
    // $ea=['judy'=>90,'amo'=>81,'john'=>70,'peter'=>54,'hebe'=>62];
    // $hi=['judy'=>84,'amo'=>71,'john'=>62,'peter'=>42,'hebe'=>64];

    $student = ['judy', 'amo', 'john', 'peter', 'hebe'];




    // $ch=[95,88,45,59,71];
    // $en=[64,78,60,32,62];
    // $ma=[70,54,68,77,80];
    // $ea=[90,81,70,54,62];
    // $hi=[84,71,62,42,64];

    // if(in_array(95,$ch)){
    //     echo 'success';
    // }else{
    //     echo 'fail';
    // }

    // echo '<table border="1"><tr>';
    // for ($i=0; $i < count($ch); $i++) { 
    //     echo '<td>';
    //     echo $ch[$i];
    //     echo '</td>';
    // }
    // echo '</tr></table>';

    $judy = [95, 64, 70, 90, 84];
    $amo = [88, 78, 54, 81, 71];
    $john = [45, 60, 68, 70, 62];
    $peter = [59, 32, 77, 54, 42];
    $hebe = [71, 62, 80, 62, 64];

    $course = ['國文', '英文', '數學', '地理', '歷史'];
    $student = ['judy', 'amo', 'john', 'peter', 'hebe'];

    echo '<table border="1"><tr>';
    for ($i = 0; $i < count($course); $i++) {
        echo '<th>';
        echo $course[$i];
        echo '</th>';
    }
    echo '</tr><tr>';

    for ($i = 0; $i < count($course); $i++) {
        echo '<td>';
        echo $judy[$i];
        echo '</td>';
    }
    echo '</tr></table>';










    // $student=['judy','amo','john','peter','hebe'];
    // $course=['國文','英文','數學','地理','歷史']
    // for ($i=0; $i < ; $i++) { 
    //     # code...
    // }
    // print_r($data);
    ?>
</body>

</html>