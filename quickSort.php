<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/03/06
 * Time: 13:20
 */
/**
 * 快速排序(思路分析：选择一个基准元素，通常选择第一个元素或者最后一个元素。通过一趟扫描，将待排序列分成两部分，一部分比基准元素小，一部分大于等于基准元素。此时基准元素在其排好序后的正确位置，然后再用同样的方法递归地排序划分的两部分)
 * @param  array  $arr   要排序的数组
 * @return array         返回排序后的数组
 */

$arr = array(1, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39);

function quickSort($arr){
	// 先判断是否需要继续进行
	$length = count($arr);
	if($length <= 1)
	{
		return $arr;
	}
	// 选择第一个元素作为基准
	$base_num = $arr[0];
	// 遍历除了标尺外的所有元素，按照大小关系放入两个数组内
	// 初始化两个数组
	$left_array = array();  // 小于基准的
	$right_array = array(); // 大于等于基准的
	for($i=1; $i<$length; $i++)
	{
		if($base_num > $arr[$i])
		{
			// 放入左边数组
			$left_array[] = $arr[$i];
		}
		else
		{
			// 放入右边数组
			$right_array[] = $arr[$i];
		}
	}
	// 再分别对左边和右边的数组进行相同的排序处理方式
    // 递归调用这个函数,并记录结果
	$left_array = quickSort($left_array);
	$right_array = quickSort($right_array);
	// 合并 左边 标尺 右边
	return array_merge($left_array, array($base_num), $right_array);
}

$sort = quickSort($arr);
echo "<pre>";print_r($sort);
/**
 * Array
(
[0] => 1
[1] => 21
[2] => 32
[3] => 36
[4] => 39
[5] => 43
[6] => 54
[7] => 62
[8] => 66
[9] => 76
[10] => 78
)
 */

?>