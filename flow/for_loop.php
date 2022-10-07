<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>for迴圈練習</title>
</head>
<body>
    <div style="background-color:orange;"><h1>For迴圈</h1></div>
    <?php
    // i++ => $i=$i+1
    // for($i=0;$i<10;$i++){
    for($i=0;$i<=10;$i++){    
        echo $i;
        echo " , ";
    }
    
    echo '$i的最終值為',$i

    ?>
    <h1>數列1,3,5,7,9...n</h1>
    <form action="#" method="post">
        n=<input type="number" name="n1">
        <input type="submit" name="send1">
    </form>
    <?php
    // $n=50;
    if(isset($_POST['send1'])){
        $n=$_POST['n1'];
        for($i=1;$i<=$n;$i=$i+2){
            echo $i.' , ';
        }
    }
    

    ?>
    <h1>數列10,20,30,40,50,60...n</h1>
    <form action="#" method="post">
        n=<input type="number" name="n2">
        <input type="submit" name="send2">
    </form>
    <?php
    // $n=10;
    // for($i=10;$i<=$n;$i=$i+10){
    //     echo $i.',';
    // };
    if(isset($_POST['send2'])){
        $n=$_POST['n2'];
        // for($i=1;$i<=$n;$i++){
        for($i=10;$i<=$n;$i=$i+10){
            // echo ($i*10);
            echo $i;
            echo ' , ';
        }
    }

    ?>
    <h1>1-100的質數
    </h1>
    <?php
    $n=100;
    for($i=3;$i<=$n;$i++){
        // 先假設每個數字都是質數
        $chk=true;
        for($j=2;$j<$i;$j++){
            if($i%$j==0){
                $chk=false;
                break;
            }
        }
        if($chk==true){
            echo $i;
            echo ' , ';
        }
        
    }

    ?>
    <h1>質數
    </h1>
    <?php
    $n=100;
    for($i=3;$i<=$n;$i++){
        // 先假設每個數字都是質數
        $chk=true;
        for($j=2;$j<$i;$j++){
            if($i%$j==0){
                $chk=false;
                break;
            }
        }
        if($chk==true){
            echo $i;
            echo ' , ';
        }
        
    }

    // for($i=1;$i<10;$i++){
    //     for($j=1;$j<10;$j++){
    //         $result=$i*$j
    //         echo "$i x $j = $result";
    //         echo "  ,  ";
    //     };
    //     echo "\n"
    // }



    ?>
</body>
</html>