<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>找字找起來</title>
    <style>
        input{
            width:500px;
        }
    </style>
</head>
<body>
<h1>我要找英文字(第一個出現)</h1>
<form action="" method="post">
    <input type="text" name="string" placeholder="請輸入英文字句。"><br>
    <input type="text" name="target" placeholder="請輸入想要尋找的字母。"><br>
    <input type="submit" name="send" value="開始找">
</form>
    
<?php
if(isset($_POST['send'])){
    // $string='qwerertretuypoidfjdbgfhjksg';
    // $target='m';
    $string=$_POST['string'];
    $target=$_POST['target'];
    $chk=false;
    $pos=0;
    while(!$chk && $pos<strlen($string)){
        if($string[$pos]==$target){
            $chk=true;
            echo "已找到 $target ，<br>第一次出現在，<br>字句中的第 ".($pos+1)." 個字。";
        }
        $pos++;
    }
    if($chk==false){
        echo "字句中沒有 $target ，請重新查詢。";
    }
}
?>
<h1>(待解)我要找英文字(找全部)</h1>
<form action="" method="post">
    <input type="text" name="string" placeholder="請輸入英文字句。"><br>
    <input type="text" name="target" placeholder="請輸入想要尋找的字母。"><br>
    <input type="submit" name="send" value="開始找">
</form>
    
<?php
if(isset($_POST['send'])){
    // $string='qwerertretuypoidfjdbgfhjksg';
    // $target='m';
    $string=$_POST['string'];
    $target=$_POST['target'];
    $chk=false;
    $pos=0;
    while(!$chk && $pos<strlen($string)){
        if($string[$pos]==$target){
            $chk=true;
            echo "已找到 $target ，<br>第一次出現在，<br>字句中的第 ".($pos+1)." 個字。";
        }
        $pos++;
    }
    if($chk==false){
        echo "字句中沒有 $target ，請重新查詢。";
    }
}
?>
<h1>(待解-找中文(每字長度為3))我要找中文字</h1>
<form action="" method="post">
    <input type="text" name="string" placeholder="請輸入想要被查找的字句。"><br>
    <input type="text" name="target" placeholder="請輸入想要尋找的字。"><br>
    <input type="submit" name="send" value="開始找">
</form>
    
<?php
if(isset($_POST['send'])){
    // $string='qwerertretuypoidfjdbgfhjksg';
    // $target='m';
    $string=$_POST['string'];
    echo $string.'<br>';
    $target=$_POST['target'];
    echo $target.'<br>';
    echo '字串長度'.strlen($string);
    $chk=false;
    $pos=0;
    while(!$chk && $pos<strlen($string)){
        if($string[$pos]==$target){
            $chk=true;
            echo "已找到 $target ，<br>第一次出現在，<br>字句中的第 ".($pos+1)." 個字。";
        }
        $pos++;
    }
    if($chk==false){
        echo "字句中沒有 $target ，請重新查詢。";
    }
}
?>
</body>
</html>