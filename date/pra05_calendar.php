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

        td:nth-child(8),
        td:nth-child(7),
        th:nth-child(8),
        th:nth-child(7) {
            background-color: lightcoral;
        }

        td.today {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h1>月曆</h1>
    <?php
    $year = date('Y');
    $month = date('n');

    // $today = date('j');
    $today = date('Y-n-j');
    echo '<br>今天是';
    // echo $today . '號';
    echo $today;

    // $firstDay = date('Y-m-1');
    $firstDay = $year . '-' . $month . '-1';
    $firstDayWeek = date('N', strtotime($firstDay));
    echo '<br>本月第一天是星期';
    echo $firstDayWeek;

    $monthDay = date('t', strtotime($firstDay));
    // $lastDate = date("Y-m-d",strtotime("$firstDay+1month-1day"));
    echo '<br>本月最後一天是';
    echo $monthDay . '號';
    $lastDate = $year . '-' . $month . '-' . $monthDay;
    echo '<br>$lastDate=>' . $lastDate;


    echo "<h1>$year 年 $month 月</h1>";
    ?>
    <table>
        <th>Week</th>
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
            echo "<td>第$i 週</td>";

            for ($j = 1; $j <= 7; $j++) {
                $date = $year . '-' . $month . '-' . (($i - 1) * 7 + $j - ($firstDayWeek - 1));
                if ($i == 1) {
                    // 第一週
                    if ($j >= $firstDayWeek) {
                        if ($date == $today) {
                            echo "今天是第$i 週";
                            echo "<td class='today'>";
                        } else {
                            echo "<td>";
                        }
                        // echo $date;
                        echo date("d", strtotime($date));
                        echo "</td>";
                        // } else if ($j == 1) {
                        //     echo "<td colspan=" . ($firstDayWeek - 1) . ">";
                        //     echo "</td>";
                    } else {
                        echo "<td>";
                        echo "</td>";
                    }
                } else {
                    // 除了第一週

                    // 除錯印出來看
                    // echo $date . '==>' .strtotime($date) .'>'. strtotime($lastDate).'<br>';

                    // if (strtotime($date) > strtotime($lastDate)) {
                    // 超過最後一天
                    if (strtotime($date)) {
                        // 在最後一天以內
                        if ($date == $today) {
                            echo "今天是第$i 週";
                            echo "<td class='today'>";
                        } else {
                            echo "<td>";
                        }
                        // echo $date;
                        echo date("d", strtotime($date));
                        echo "</td>";
                    } else {
                        // 超過最後一天
                    }
                }
            }
            echo '</tr>';
        }
        ?>
    </table>

</body>

</html>