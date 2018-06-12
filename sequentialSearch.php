<?php
/**
 * Created by PhpStorm
 * User: SenCaoKing
 * Date: 2018/06/12
 * Time: 20:43
 */

/**
 * 顺序查找 思路分析：从数组的第一个元素开始一个一个向下查找，如果有和目标一致的元素，查找成功；如果到最后一个元素仍没有目标元素，则查找失败。
 */

$arr = array(1, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39);

/**
 * @param $arr 要查找的数组
 * @param $k   要查找的值
 */
function sequentialSearch($arr, $k){
    // 获取查找范围
    $n = count($arr);
    // 遍历数组找到目标元素
    for($i=0; $i<$n; $i++){
        if($arr[$i] == $k){
            break;
        }
    }
    // 如果存在则返回键值
    if($i < $n){
        return $i;
    }else{
        return "没有找到相关数据";
    }
}
var_dump(sequentialSearch($arr, 66)); // int(5)

?>