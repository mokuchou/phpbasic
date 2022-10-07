<?php
?>
<h1>成績等級判斷</h1>

<?php
$score=100;
echo "你的成績為：".$score;
echo "<BR>";

if($score>=0 && $score<60){
    $level="E";
}else if($score>=60 && $score<70){
    $level="D";
}else if($score>=70 && $score<80){
    $level="C";
}else if($score>=80 && $score<90){
    $level="B";
}else if($score>=90 && $score<=100){
    $level="A";
}

// $level="C";
echo "你的成績等級為：".$level;
echo "<hr>";
switch($level){
    case "A":
        echo "表現優良，請繼續保持";
    break;
    case "B":
        echo "值得肯定，還有進步空間";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "資料有誤或無心學業?";

}

?>
<h1>成績等級判斷2</h1>

<?php
$score=100;
echo "你的成績為：".$score;
echo "<BR>";

// 0--E--60--D--70--C--80--B--90--A--100
// else if/else if/else if/else if/else

if($score<0){
    $level="Z";
}else if($score<60){
    $level="D";
}else if($score<70){
    $level="D";
}else if($score<80){
    $level="C";
}else if($score<90){
    $level="B";
}else if($score<=100){
    $level="A";
}else{
    $level="Z";
}

// if($score>100){
//     $level="Z";
// }else if($score>90){
//     $level="A";
// }else if($score>80){
//     $level="B";
// }else if($score>70){
//     $level="C";
// }else if($score>60){
//     $level="D";
// }else if($score>0){
//     $level="D";
// }else{
//     $level="Z";
// }

echo "你的成績等級為：".$level;
echo "<hr>";
switch($level){
    case "A":
    case "B":
        echo "表現優良，請繼續保持";
    break;
    case "C":
        echo "需要更多的練習";
    break;
    case "D":
        echo "需要加強基本功";
    break;
    default:
        echo "資料有誤或無心學業?";

}

// 不能這樣做，switch的條件式必須是一個結果
// if($score>=0 && $score<=100){
//     swith($score){
//         case "$score>=90":
//             echo "A";
//         break;
//         case "$score>=80":
//             echo "B";
//         break;
//         case "$score>=70":
//             echo "C";
//         break;
//         case "$score>=60":
//             echo "D";
//         break;
//         default:
//             echo "E";
//         break;
//     }
// }else{
//     echo "成績輸入有誤";
// }

?>