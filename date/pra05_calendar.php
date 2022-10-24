<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            border: 4px double lightblue;
        }

        tr,
        th,
        td {
            border: 1px solid #eee;
            text-align: center;
        }

        table {
            width: 80%;
        }

        td {
            width: calc(80% / 7);
        }
    </style>
</head>

<body>
    <h1>月曆</h1>
    <?php
    $year = date('Y');
    $month = date('n');
    echo "$year 年 $month 月";
    $firstDay = date('Y-m-1');
    $firstDayWeek = date('N', strtotime($firstDay));
    echo '<br>本月第一天是星期';
    echo $firstDayWeek;

    echo '<br>';
    $lastDay = date('t',strtotime($firstDay));
    // $lastDate = date("Y-m-d",strtotime("$firstDay+1month-1day"));
    echo $lastDay;
    ?>
    <table>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
        <?php
        for ($i = 1; $i <= 7; $i++) {
            echo '<tr>';

            for ($j = 1; $j <= 7; $j++) {
                if ($i == 1) {
                    if ($j >= $firstDayWeek) {
                        echo "<td>";
                        echo ($i - 1) * 7 + $j - ($firstDayWeek - 1);
                        echo "</td>";
                    }else{
                        echo "<td>";
                        echo "</td>";
                    }
                } else {
                    echo "<td>";
                    $date=($i - 1) * 7 + $j - ($firstDayWeek - 1);
                    if ($date>$lastDay) {
                    }else{
                        echo $date;
                    }
                    echo "</td>";
                }
            }
            echo '</tr>';
        }

        ?>
    </table>


</body>

</html>