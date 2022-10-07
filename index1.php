<?php

$a=10;
$book_author_name=10;
$bookAuthorName=10;
$BookAuthorName=10;

echo "<p>";

$book=999999;
echo "book123456a" . $book;

echo "</p>";

echo "<br />";

$name="卡比獸";
echo $name . "超可愛";

echo "<br /><br />";

$second=24*60*60;
echo "一天有" . $second . "秒";

echo "<br />";

$yearHour=365*24;
echo "一年有" . $yearHour . "小時";

echo "<br /><br /><br />";

$name="卡比獸極巨化";
echo $name . " 跟山一樣大";

echo "<br /><br />";

define("COMPANY","泰山訓練場");
echo COMPANY;

echo "<br /><br />";

define("POKEMON","寶可夢");
echo POKEMON . $name;

echo "<br>";
echo $book_author_name + $BookAuthorName;


?>

<H2>運算子</H2>
<?php
$op=true;
echo !$op;
echo "---------";
$op=false;
echo !$op;

echo "<br>";

$price=51;
$mod=$price%4;
$avg=($price-$mod)/4;

echo "51元4人分，平均每人分" . $avg;
echo "<br>";
echo " 還有" . $mod . "沒有分配";

echo "<br><br><br>";

$a=199;
$b=5000;

echo "交換前";
echo "<br>";
echo '$a='.$a;
echo "<br>";
echo '$b='.$b;
echo "<br>";
// 希望兩者交換

$tmp=$a;
$a=$b;
$b=$tmp;

echo "交換後";
echo "<br>";
echo '$a='.$a;
echo "<br>";
echo '$b='.$b;
echo "<br>";

$a=5;
$a%3;
echo "<br>";
echo '$a='.$a;
echo "<br>";



?>