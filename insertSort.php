<?php
/**
 * Created by Sublime
 * User: SenCaoKing
 * Date: 2018/03/06
 * Time: 13:20
 */
/**
 * 插入排序(思路分析：在要排序的一组数中，假设前面的数已经是排好顺序的，现在要把第 n 个数插到前面的有序数中，使得这 n 个数也是排好顺序的。如此反复循环，直到全部排好顺序)
 * @param  array  $arr   要排序的数组
 * @return array         返回排序后的数组
 */

/**
 * ①
 */
$arr = array(1, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39);

function insertSort($arr)
{
	$length = count($arr);
	for($i=1; $i<$length; $i++)
	{
		$tmp = $arr[$i];
		// 内层循环控制，比较并插入
		for($k=$i-1; $k>=0; $k--)
		{
			if($tmp < $arr[$k])
			{
				// 发现插入的元素要小，交换位置，将后边的元素与前面的元素互换
				$arr[$k+1] = $arr[$k];
				$arr[$k] = $tmp;
			}
			else
			{
				// 如果碰到不需要移动的元素，由于是已经排序好是数组，则前面的就不需要再次比较了。
				break;
			}
		}
	}
	return $arr;
}

$sort = insertSort($arr);
print_r($sort); // Array ( [0] => 1 [1] => 21 [2] => 32 [3] => 36 [4] => 39 [5] => 43 [6] => 54 [7] => 62 [8] => 66 [9] => 76 [10] => 78 )

echo "<hr>";

function insertionSort($arr, $n)
{
    for($i=0; $i<=$n; $i++)
    {
        $tmp = $arr[$i];
        for($j=$i; $j>0 && $arr[$j-1] > $tmp; $j--)
        {
            $arr[$j] = $arr[$j-1];
        }
        $arr[$j] = $tmp;
    }
    return $arr;
}

$num = count($arr) - 1;
$d = insertionSort($arr, $num); // 9
echo "<pre>";print_r($d);
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