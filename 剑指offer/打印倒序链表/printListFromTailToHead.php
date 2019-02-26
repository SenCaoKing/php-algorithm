<?php
/**
 * 输入一个链表，按链表值从尾到头的顺序返回一个ArrayList
 *
 * 题目描述 : 输入一个链表，按链表值从尾到头的顺序返回一个ArrayList。。
 *
 */

// ① 定义一个数组，将原链表循环一次封装到数组，运用数组函数倒序输出。
function printListFromTailToHead($head)
{
    // 定义一个链表
    $list = [];
    // 循环链表，倒着输出
    while ($head != null) {
        // 1>
        $list[] = $head->val();
        $head = $head->next;

        // 2>
        /*
        array_push($list, $head->val);
        $head = $head->next;
        */
    }
    return array_reverse($list); // 以相反的元素顺序返回数据
}

// ② 递归输出
function printListFromTailToHead2($head)
{
    $listArray = array();
    if($head != NULL) {
        $listArray = printListFromTailToHead2($head->next);
        $listArray[] = $head->val;
    }

    return $listArray;
}
