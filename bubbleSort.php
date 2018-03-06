<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/03/06
 * Time: 11:00
 */
/**
 * 冒泡排序(思路分析：在要排序的一组数中，对当前还未排好的序列，从前往后对相邻的两个数依次进行比较和调整，让较大的数往下沉，较小的往上冒。即，每当两相邻的数比较后发现它们的排序与排序要求相反时，就将它们互换。)
 * @param  array  $arr   要排序的数组
 * @return array         返回排序后的数组
 */
$arr = array(1, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39);

function bubbleSort($arr){
	$length = count($arr);
	// 该层循环控制，需要冒泡的轮数
	for($i=1; $i<$length; $i++){
		// 该层循环用来控制每轮 冒出一个数 需要比较的次数
		for($k=0; $k<$length-$i; $k++){
			if($arr[$k]>$arr[$k+1]){
				$tmp=$arr[$k+1];
				$arr[$k+1]=$arr[$k];
				$arr[$k]=$tmp;
			}
		}
	}
	return $arr;
}
$sort=bubbleSort($arr);
print_r($sort);

?>