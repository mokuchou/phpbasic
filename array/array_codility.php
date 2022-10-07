<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_Codility</title>
</head>

<body>
    <h1>Codility</h1>
    <h3>老師寫</h3>
    <?php
    SELECT sum(v) from elements
    
    
    ?>
    <h3>老師寫</h3>
    <?php
    function solution($A, $K)
    {
        if(empty($A) || count(array_unique($A))==1 || count($A)==$K){
            return $A;
        }
        if(count(array_unique($A))==1){
            return $A;
        }
        // 可以不用巢狀迴圈
        if(count($A)==$K){
            return $A;
        }
        for ($i = 0; $i < $K; $i++) {
            $t = $A[count($A) - 1];
            foreach ($A as $j => $v) {
                if ((count($A) - 2 - $j) >= 0) {
                    $A[count($A) - 1 - $j] = $A[count($A) - 2 - $j];
                } else {
                    $A[count($A) - 1 - $j] = $t;
                }
            }
        }
        return $A;
    }

    print_r(solution([3, 8, 9, 7, 6], 3))
    print_r(solution([0,0,0,], 1))
    print_r(solution([1,2,3,4], 4))

    ?>

    <h3>自己寫</h3>
    <p>a=[3,8,9,7,6]
        k=3
        a=[9,7,6,3,8]

        a=[0,0,0]
        k=1
        a=[0,0,0]

        a=[1,2,3,4]
        k=4
        a=[1,2,3,4]
    </p>
    <?php
    // $a=[3,8,9,7,6];
    // $k=3;
    $a = [0, 0, 0];
    $k = 1;
    // $a=[1,2,3,4];
    // $k=4;



    for ($j = 0; $j < $k; $j++) {
        for ($i = count($a) - 1; $i >= 0; $i--) {
            $a[$i + 1] = $a[$i];
            // print_r($a);
            // echo '<br>';
            if ($i == 0) {
                $a[$i] = $a[$i + count($a) - 1];
                unset($a[$i + count($a) - 1]);
            }
        }
    }
    echo '<br>';
    print_r($a);
// 空陣列是否需要跑這個東西?
// 裡面的東西都一樣需不需要跑?


?>
</body>

</html>