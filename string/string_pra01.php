<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串練習</title>
</head>

<body>
    <h1>字串取代-自己練習</h1>
    <?php
    $str = "aaddw1123";
    for ($i = 0; $i < strlen($str); $i++) {
        $str = str_replace($str[$i], '*', $str);
        // echo $str . '<br>';
    }
    echo $str;
    ?>
    <h1>字串取代-方法一</h1>
    <?php
    $str = "aaddw1123";
    $str = str_replace(['a', 'd', 'w', 1, 2, 3], '*', $str);
    echo $str . '<br>';
    ?>

    <h1>字串取代-方法二</h1>
    <?php
    $str = "aaddw1123";
    for ($i = 0; $i < mb_strlen($str); $i++) {
        echo '*';
    }
    // echo $str.'<br>';
    ?>

    <h1>字串取代-方法三</h1>
    <?php
    $str = "aaddw1123";
    echo str_repeat('*', mb_strlen($str));
    ?>

    <h1>字串分割-自己練習</h1>
    <?php
    $str = "this,is,a,book";
    $strArray = explode(',', $str);
    print_r($strArray);
    ?>

    <h1>字串分割-方法一</h1>
    <?php
    $array = explode(',', 'this,is,a,book');
    print_r($array);
    // 不可以找空的，但可以找空白
    $array = explode(' ', 'this,is,a,book');
    print_r($array);
    ?>

    <h1>字串組合-方法一</h1>
    <?php
    $array = explode(',', 'this,is,a,book');
    print_r($array);
    echo '<br>';
    echo join(' ', $array);
    ?>

    <h1>子字串取用-自己練習</h1>
    <?php
    $str = "The reason why a great man is great is that he resolves to be a great man";
    for ($i = 0; $i < 10; $i++) {
        echo $str[$i];
    }
    echo '...';
    ?>

    <h1>子字串取用-方法一</h1>
    <?php
    $str = "The reason why a great man is great is that he resolves to be a great man";
    echo mb_substr("The reason why a great man is great is that he resolves to be a great man", 0, 10) . '...';
    echo '<br>';
    echo mb_substr("The reason why a great man is great is that he resolves to be a great man", 0, 10) . str_repeat('.', 3);
    ?>

    <h1>字串函式整合應用</h1>
    <!-- 請將句中的 “程式設計” 放大字型或變色. -->
    <?php
    $target = '程式設計';
    $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $sub = mb_substr($str, mb_strpos($str, $target), mb_strlen($target));
    // echo 'mb_strpos='.mb_strpos($str,$target);
    // echo '<br>';
    // echo mb_substr($str,7,mb_strlen($target));
    // echo '<br>';
    echo $sub . '<br>';

    echo '<hr>';

    $target = '程式設計';
    $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $sub = '<span style="font-size:24px;color:red;">' . $target . '</span>';
    $result = str_replace($target, $sub, $str);
    echo $sub . '<br>';
    echo $result;

    echo '<hr>';

    print_r(explode($target, $str));
    echo '<br>';
    echo join($sub, explode($target, $str));

    echo '<hr>';
    // 自己嘗試寫失敗
    $target1 = '程';
    $target2 = '計';
    $insert_string1 = '<span style="font-size:24px;color:red;">';
    $insert_string2 = '</span>';
    $newstring = substr_replace($str, $insert_string1, mb_strpos($str, $target1), 0);
    $newstring = substr_replace($newstring, $insert_string2, (mb_strpos($newstring, $target2) + 1), 0);
    echo $newstring;
    ?>
    <br>
    學會PHP網頁<span style="font-size:24px;color:red;">程式設計</span>，薪水會加倍，工作會好找

</body>

</html>