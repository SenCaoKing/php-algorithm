<?php
/**
 * 替换空格
 *
 * 题目描述 : 请实现一个函数，将一个字符串中的每个空格替换成 "%20"。例如，当字符串为 We Are Happy 则经过替换之后的字符串为 We%20Are%20Happy.
 *
 */

function replaceSpace($str)
{
    // 原字符串长度
    $len = strlen($str);
    if ($len <= 0) {
        return false;
    }
    // 空格数量
    $blank = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == ' ') {
            $blank++;
        }
    }
    // 此处还需判断
    if ($blank == 0) {
        return false;
    }
    // 替换后字符串键值
    $new_length = ($len + $blank * 2) - 1;
    // 从后面往前面替换
    for ($i = $len - 1; $i >= 0; $i--) {
        if($str[$i] == ' ') {
            $str[$new_length--] = '0';
            $str[$new_length--] = '2';
            $str[$new_length--] = '%';
        } else {
            $str[$new_length--] = $str[$i];
        }
    }

    return $str;
}

var_dump(replaceSpace('We Are Happy'));

/**
 * 思路：
 *
 * ① 从前往后替换，后面的字符要不断往后移动，要多次移动，所以效率低下。
 *
 * ② 从后往前，先计算需要多少空间，然后从后往前移动，则每个字符只移动一次，这样效率更高一点。
 */