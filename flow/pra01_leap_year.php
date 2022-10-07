<?php
?>
<h1>閏年判斷</h1>
<?php
$year=2000;
$leap="";
if($year%4!=0){
    $leap="平";
}else if($year%4==0 && $year%100!=0){
    $leap="閏";
}else if($year%100==0 && $year%400!=0){
    $leap="平";
}else if($year%400==0){
    $leap="閏";
}

echo "<p>";

echo "</p>";

echo $year."年為".$leap."年";
?>
<h1>閏年判斷</h1>
<?php
$year=2000;
$leap="";
if($year%400==0){
    $leap="閏";
}else if($year%100==0){
    $leap="平";
}else if($year%4==0){
    $leap="閏";
}else{
    $leap="平";
}

echo "<p>";

echo "</p>";

echo $year."年為".$leap."年";
?>
