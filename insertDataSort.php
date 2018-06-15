<?php
/**
 * Created by Phpstorm
 * User: SenCaoKing
 * Date: 2018/06/14
 * Time: 22:14
 */
/**
 * 向数组中插入一个数，并按照原来的顺序排列
 */

function insertDataSort($arr, $in){
    $n = count($arr);
    // 如果要插入的数已经最大，直接打印
    if($arr[$n-1] < $in){
        $arr[$n] = $in;
        return $arr;
    }else{
        for($i=0; $i<$n; $i++){
            // 找出要插入的位置
            if($arr[$i] >= $in){
                $t1 = $arr[$i];
                $arr[$i] = $in;
                // 把后面的数据后移一位
                for($j=$i+1; $j<$n+1; $j++){
                    $t2 = isset($arr[$j]) ? $arr[$j] : "";
                    $arr[$j] = $t1;
                    $t1 = $t2;
                }
                return $arr;
            }
        }
    }
}

$in = 4;
$arr = [1, 1, 1, 3, 5, 7];
echo "<pre>";
print_r(insertDataSort($arr, $in));
/**
 * Array
(
[0] => 1
[1] => 1
[2] => 1
[3] => 3
[4] => 4
[5] => 5
[6] => 7
)
 */

?>