<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While迴圈-尋找字元</title>
</head>
<body>
<h1>尋找字元</h1>
<li>給定一個字串句子</li>
<li>給定一個單字或字母</li>
<li>尋找相符的內容</li>
<li>印出尋找到的單字或字母所在句子中的位置</li>
<div>比如：</div>
<div>$str="Today is a good day";</div>
<div>$search="i";</div>
<div>結果:i=>7;</div>
<div>如果找不到,顯示"查無結果";</div>
<div></div>
<?php
$str="Today is a good day";
$search="o";
$chk=false;
$pos=0;

// echo $str[2]; => d
// echo $str[3]; => a

while($chk==false){
    if($str[$pos]==$search){
        $chk=true;
    }
    $pos=$pos+1;
}

if($chk=true){
    echo "你要找的字元是".$search;
    echo "在位置".($pos-1);
    // $pos最後會多+1要扣回來
}else{
    echo "查無結果";
}
?>
<h1>練習找多個字元(未完成)</h1>
<?php
$str="Today is a good day";
$search="o";
$chk=false;
$pos=0;
$count=0;
while($chk==false){

    if($str[$pos]==$search){
        $chk=true;
        $count=$count+1;
    }
    $pos=$pos+1;

}

if($chk=true){
    echo "你要找的字元是".$search;
    echo "在位置".($pos-1);
    // $pos最後會多+1要扣回來
}else{
    echo "查無結果";
}
?>


<h1>練習找多個字元(解答)</h1>

<?php
$string="today is a good day to play";
$target="d";

$found=false;
$pos=0;
while(!$found && $pos<strlen($string)){  //如果還沒找到並且位置小於字串的長度
    // f=>!=>t  t&&t
    if($string[$pos]==$target){
        // 0=> t ==d
        $found=true;
        echo "找到了，位置在" . $pos;
    }
    $pos++;
}

if($found==false){
    echo "沒有找到";
}


?>

</body>
</html>