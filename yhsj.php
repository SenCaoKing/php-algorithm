<?php
/**
 * Created by PhpStorm
 * User: SenCaoKing
 * Date: 2018/06/14
 * Time: 19:34
 */
/**
 * 杨辉三角
 */

// 先写出每行第一个和最后一个数
for($i=0; $i<7; $i++){
    $a[$i][0] = 1;
    $a[$i][$i] = 1;
}

// 再写出其他数字
for($i=2; $i<7; $i++){
    for($j=1; $j<$i; $j++){
        $a[$i][$j] = $a[$i-1][$j-1] + $a[$i-1][$j];
    }
}

for($i=0; $i<7; $i++){
    for($j=0; $j<=$i; $j++){
        echo " ";
        echo $a[$i][$j];
    }
    echo "<br>";
}




?>