<?php

$score=120;
if($score>=0 && $score<=100){

    if($score>=60){
        echo $score."分 及格";
    }else{
        echo $score."分 不及格";
    }
}else{
    echo "成績資料有誤，應該在0-100之間";
}

?>