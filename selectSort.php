<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/03/06
 * Time: 13:20
 */
/**
 * 选择排序(思路分析：在要排序的一组数中，选出最小的一个数与第一个位置的数交换。然后在剩下的数当中再找最小的与第二个位置的数交换，如此循环到倒数第二个数和最后一个数为止)
 * @param  array  $arr   要排序的数组
 * @return array         返回排序后的数组
 */

$arr = array(1, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39);

function selectSort($arr)
{
	// 双重循环完成，外层控制轮数，内层控制比较次数
	$length = count($arr);
	for($i=0; $i<$length-1; $i++)
	{
		// 先假设最小的值的位置
		$mini = $i;
		for($k=$i+1; $k<$length; $k++)
		{
			// $arr[$mini];//当前已知的最小值
			if($arr[$mini]>$arr[$k])
			{
				// 比较，发现更小的，记录下最小值的位置；并且在下次比较时采用已知的最小值进行比较。
				$mini = $k;
			}
		}
		// 已经确定了当前的最小值的位置，保存到 $mini 中。如果发现最小值的位置与当前假设的位置 $i 不同，则位置互换即可。
		if($mini != $i)
		{
			$tmp = $arr[$mini];
			$arr[$mini] = $arr[$i];
			$arr[$i] = $tmp;
		}
	}
	// 返回最终结果
	return $arr;
}

$sort = selectSort($arr);
print_r($sort); // Array ( [0] => 1 [1] => 21 [2] => 32 [3] => 36 [4] => 39 [5] => 43 [6] => 54 [7] => 62 [8] => 66 [9] => 76 [10] => 78 )

?>