<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星排列練習</title>
    <style>
        *{
            font-family:'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
我想要的星星尺寸是...
<form action="" method="post">
    <input type="number" name="total" placeholder="請輸入奇數，偶數會被+1">
    <input type="submit" name="send" value="出現吧">
</form>
<h1>直角三角形</h1>
<!-- <pre>
*
**
***
****
*****
</pre>
<h4>自己練習</h4> -->
<?php
// $total=5;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    for($i=0;$i<$total;$i++){
        for($j=0;$j<=$i;$j++){
            echo '*';
        }
        echo '<br>';
    }
}

?>

<h1>倒直角三角形</h1>
<!-- <pre>
*****
****
***
**
*
</pre>
<h4>自己練習</h4> -->
<?php
// $total=5;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    for($i=0;$i<$total;$i++){
        for($j=$total;$j>$i;$j--){
            echo '*';
        }
        echo '<br>';
    }
}
?>

<h1>正三角形</h1>
<!-- <pre>
    *
   ***
  *****
 *******
*********
</pre>
<h4>自己練習</h4> -->
<?php
// $total=5;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    for($i=0;$i<$total;$i++){
        for($k=$total;$k>$i;$k--){
            echo '&nbsp;';
        }
        for($j=0;$j<($i*2)+1;$j++){
            echo '*';
        }
        echo '<br>';
    }
}
// exit();
// die();

?>


<h1>菱形</h1>
<!-- <pre>
    *
   ***
  *****
 *******
*********
 *******
  *****
   ***
    *
</pre> -->
<!-- <h4>自己練習-上0-4層、下0-3層</h4> -->
<?php
// $total=5;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    $mid=($total-1)/2;
    for($i=0;$i<=$mid;$i++){
        for($k=$mid;$k>$i;$k--){
            echo '&nbsp;';
        }
        for($j=0;$j<($i*2)+1;$j++){
            echo '*';
        }
        echo '<br>';
    }
    for($i=0;$i<$mid;$i++){
        for($k=0;$k<=$i;$k++){
            echo '&nbsp;';
            // echo 'a';
        }
        for($j=0;$j<($mid-$i)*2-1;$j++){
            echo '*';
        }
        echo '<br>';
    }
}
?>

<h1>菱形</h1>
<!-- <h4>自己練習-上0-4層、下3-0層</h4> -->
<?php
// $total=5;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    $mid=($total-1)/2;
    for($i=0;$i<=$mid;$i++){
        for($k=$mid;$k>$i;$k--){
            echo '&nbsp;';
        }
        for($j=0;$j<($i*2)+1;$j++){
            echo '*';
        }
        echo '<br>';
    }
    for($i=($mid-1);$i>=0;$i--){
        for($k=0;$k<($mid-$i);$k++){
            echo '&nbsp;';
            // echo 'a';
        }
        for($j=0;$j<($i*2+1);$j++){
            echo '*';
        }
        echo '<br>';
    }
}
?>

<h1>菱形</h1>
<!-- <h4>自己練習-0-8層</h4> -->
<?php
// $total=5;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    $mid=($total-1)/2;
    for($i=0;$i<$total;$i++){
        if($i<=$mid){
            $space=$mid-$i;
            $star=$i*2+1;
        }else{
            $space=$i-$mid;
            $star=($mid-$space)*2+1;
        }
        for($k=0;$k<$space;$k++){
            // echo 'a';
            echo '&nbsp;';
        }
        for($j=0;$j<$star;$j++){
            echo '*';
        }
        echo '<br>';
    }
}
?>

<h1>矩形</h1>
<!-- <pre>
*******
*     *
*     *
*     *
*     *
*     *
*******
</pre>
<h4>自己練習</h4> -->
<?php
// $total=5;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    for($i=0;$i<$total;$i++){
        if($i!=0 && $i!=($total-1)){
            echo '*';
            for($k=0;$k<($total-2);$k++){
                echo '&nbsp;';
            }
            echo '*';
        }else{
            for($j=0;$j<$total;$j++){
                echo '*';
            }
        }
        echo '<br>';
    }
}
?>

<h1>矩形叉叉</h1>
<!-- <pre>
*******
**   **
* * * *
*  *  *
* * * *
**   **
*******
</pre>
<h4>自己練習</h4> -->
<?php
// $total=7;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    $mid=($total-1)/2;
    for($i=0;$i<$total;$i++){
        if($i==0 || $i==($total-1)){
            for($j=0;$j<$total;$j++){
                echo '*';
            }
        }else if($i==$mid){
            echo '*';
            for($k=0;$k<($total-3)/2;$k++){
                echo '&nbsp;';
            }
            echo '*';
            for($k=0;$k<($total-3)/2;$k++){
                echo '&nbsp;';
            }
            echo '*';
        }else if($i<$mid){
            echo '*';
            for($l=0;$l<($i-1);$l++){
                echo '&nbsp;';
            }
            echo '*';
            for($l=0;$l<($total-(($i+1)*2));$l++){
                echo '&nbsp;';
            }
            echo '*';
            for($l=0;$l<($i-1);$l++){
                echo '&nbsp;';
            }
            echo '*';
        }else{
            echo '*';
            for($m=0;$m<($mid*2-$i-1);$m++){
                echo '&nbsp;';
            }
            echo '*';
            for($m=0;$m<($total-($mid*2-$i+1)*2);$m++){
                echo '&nbsp;';
            }
            echo '*';
            for($m=0;$m<($mid*2-$i-1);$m++){
                echo '&nbsp;';
            }
            echo '*';
        }
        echo '<br>';
    }
}
?>
<h1>矩形叉叉</h1>
<!-- <pre>
*******
**   **
* * * *
*  *  *
* * * *
**   **
*******
</pre>
<h4>縮減-自己練習</h4> -->
<?php
// $total=11;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    for ($i=0;$i<$total;$i++) { 
        for ($j=0; $j<$total; $j++) { 
            if($i==0 || $i==($total-1) || $j==0 || $j==($total-1) || $i==$j || ($i+$j+1)==$total){
                echo '*';
            }else{
                echo '&nbsp;';
            }
        }
        echo '<br>';
    }
}
?>

<h1>倒直角三角形</h1>
<!-- <pre>
*****
****
***
**
*
</pre>
<h4>自己練習</h4> -->
<?php
// $total=5;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    for ($i=0; $i<$total; $i++) { 
        for ($j=0; $j<$total; $j++) { 
            if(($i+$j)<$total){
                echo '*';
            }
        }
        echo '<br>';
    }
}
?>
<h1>倒正三角形</h1>
<!-- <pre>
*********
 *******
  *****
   ***
    *
</pre>
<h4>自己練習</h4> -->
<?php
// $total=9;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    for ($i=0; $i<($total+1)/2; $i++) { 
        for ($j=0; $j<$total; $j++) { 
            if($i==0 || (($i+$j)>=($i*2) && ($i+$j)<$total)){
                echo '*';
            }else{
                echo '&nbsp';
            }
        }
        echo '<br>';
    }
}
?>

<h1>挖空的菱形</h1>
<!-- <pre>
    *
   * *
  *   *
 *     *
*       *
 *     *
  *   *
   * *
    *
</pre>
<h4>自己練習</h4> -->
<?php
// $total=15;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    $mid=($total-1)/2;
    for ($i=0; $i < $total; $i++) { 
        for ($j=0; $j < $total; $j++) { 
            if(($i+$j)==$mid || ($i+$j)==($total+$mid-1) || ($i-$j)==$mid || ($j-$i)==$mid){
                echo '*';
            }else{
                echo '&nbsp;';
            }
        }
        echo '<br>';
    }
}
?>

<h1>挖空的菱形中加入對角線</h1>
<!-- <pre>
    *
   ***
  * * *
 *  *  *
*********
 *  *  *
  * * *
   ***
    *
</pre>
<h4>自己練習</h4> -->
<?php
// $total=15;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    $mid=($total-1)/2;
    for ($i=0; $i < $total; $i++) { 
        for ($j=0; $j < $total; $j++) { 
            if(($i+$j)==$mid || ($i+$j)==($total+$mid-1) || ($i-$j)==$mid || ($j-$i)==$mid){
                echo '*';
            }else if($i==$mid || $j==$mid){
                echo '*';
            }else{
                echo '&nbsp;';
            }
        }
        echo '<br>';
    }
}
?>
<h1>立方體</h1>
<!-- <pre>
     ******
    *    **
   *    * *
  *    *  *
 *    *   *
******    *
*    *   * 
*    *  *  
*    * *   
*    **    
******     
</pre>
<h4>自己練習</h4> -->
<?php
// $total=11;
if(isset($_POST['send'])){
    $total=$_POST['total'];
    $total=($total%2==0)?$total+1:$total;
    $mid=($total-1)/2;
    for ($i=0; $i < $total; $i++) { 
        for ($j=0; $j < $total; $j++) { 
            if($i==0 && $j>=$mid){
                echo '*';
            }else if($j==($total-1) && $i<=$mid){
                echo '*';
            }else if(($j==0 || $j==$mid) && $i>=$mid){
                echo '*';
            }else if(($i==$mid || $i==($total-1)) && $j<=$mid){
                echo '*';
            }else if(($i+$j)%$mid==0 && $i<=$mid && $i!=0){
                echo '*';
            }else if(($i+$j)/$mid==3){
                echo '*';
            }else{
                echo '&nbsp;';
                // echo 'a';
            }
        }
        echo '<br>';
    }
}
die()
?>
<h1>愛心</h1>
<pre>
 **   ** 
*  * *  *
*   *   *
*       *
*       *
 *     * 
  *   *  
   * *   
    *    
</pre>
<h4>自己練習</h4>
<?php
$total=11;
// if(isset($_POST['send'])){
//     $total=$_POST['total'];
    // $total=($total%2==0)?$total+1:$total;
$mid=($total-1)/2;
$cen=($mid%2==0)?$mid/2:($mid+1)/2;
$top=(($total-1)%4==0)?($total-1)/4:($total-3)/4;
$tops=(($total-1)%2==0)?($total-1)/2:($total-3)/2;
for ($i=0; $i < $total; $i++) { 
    // for ($j=0; $j < $total; $j++) { 
        if($i==0){
            echo 'a';
            for ($a=0; $a<=$top;$a++) { 
                echo '*';
            }
            for ($b=0; $b<=$tops;$b++) { 
                echo 'a';
            }
            for ($a=0; $a<=$top;$a++) { 
                echo '*';
            }
            echo 'a';
        }else if($i>0 && $i<$cen){
            echo '*';
            for ($a=0; $a<($cen-1); $a++) { 
                for ($b=0; $b<=$top ; $b++) { 
                    echo 'a';
                }
            }
            echo '*';
            for ($c=0; $c<($cen-1); $c++) { 
                for ($d=0; $d<=($tops-2) ; $d++) { 
                    echo 'a';
                }
            }
            echo '*';
            for ($a=0; $a<($cen-1); $a++) { 
                for ($b=0; $b<=$top ; $b++) { 
                    echo 'a';
                }
            }
            echo '*';
            // }
        }
        echo '<br>';
}



// 座標寫法沒成功
// for ($i=0; $i < $total; $i++) { 
//     for ($j=0; $j < $total; $j++) { 
//         if($i==0 && ($j==0 || $j==($total-1))){
//             echo 'b';
//         }else if($j==0 && $i<=$mid){
//             echo '*';
//         }else if($j==($total-1) && $i<=$mid){
//             echo '*';
//         }else if(($i+$j)==1){
//             echo '*';
//         }else if(($i-$j)==($total-$cen) || ($j-$i)==($total-$cen)){
//             echo '*';
//         }else{
//             // echo '&nbsp;';
//             echo 'a';
//         }
//     }
//     echo '<br>';
// }
// }
?>
</body>
</html>