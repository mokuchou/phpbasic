<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_五百年內的閏年</title>
    <style>
        table,tr,td{
            border: 1px solid;
            text-align: center;
        }
        td{
            box-sizing: border-box;
            width: 50px;
        }
    </style>
</head>

<body>
    <h1>Array_五百年內的閏年</h1>
    <form action="" method="post">
        <input type="number" name="year" value="2022">
        <input type="submit" name="send" value="查詢閏年">
    </form>
    <?php
    // $year = 2022;
    if(isset($_POST['send'])){
        $year=$_POST['year'];
        for ($i = 0; $i < 500; $i++) {
            if (($year + $i) % 4 == 0 && ($year + $i) % 100 != 0 || ($year + $i) % 400 == 0) {
                $leapyear[] = ($year + $i);
            }
        }
        // print_r($leapyear);
        echo "<h3>$year 年到".($year+500)."年的閏年有".count($leapyear)."個</h3>";
        echo '<table>';
        echo '<tr>';
        foreach ($leapyear as $key => $leap) {
            echo '<td>' . $leap . '</td>';
            if (($key+1) % 10 == 0) {
                echo '</tr><tr>';
            }
        }
        echo '</tr>';
        echo '</table>';
    }
        ?>
</body>

</html>