<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>五百年內的閏年</title>
    <style>
        #testYear{
            width: 200px;
        }
        table,tr,td{
            text-align: center;
            border: 1px solid #333;
        }
        table{
            width: 50%;
        }
        td:hover{
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h1>五百年內的閏年</h1>
    <?php
    $years = [];
    for ($i = 2022; $i <= 2522; $i++) {
        if (($i % 4 == 0 && $i % 100 != 0) || $i % 400 == 0) {
            $years[] = $i;
        }
    }

    // echo '<pre>';
    // print_r($years);
    // echo '</pre>';
    ?>
    <div>查詢範圍2022至2522年</div>
    <form action="" method="post">
        <input type="number" name="testYear" id="testYear" min="2022" max="2522">
        <input type="submit" name="send" value="查詢閏年">
    </form>
    <?php
    $testYear = 2022;
    if (isset($_POST['send'])) {
        $testYear = $_POST['testYear'];
    }
    echo (in_array($testYear, $years)) ? "$testYear 是閏年" : "$testYear 不是閏年";
    ?>

    <h1>五百年內的閏年</h1>
    <table>
        <?php
        foreach ($years as $idx => $year) {
            if ($idx % 5 == 0) {
                echo "<tr>";
                echo "<td>{$year}</td>";
            } else if ($idx % 5 == 4) {
                echo "<td>{$year}</td>";
                echo "</tr>";
            } else {
                echo "<td>{$year}</td>";
            }
        }
        ?>
    </table>


</body>

</html>