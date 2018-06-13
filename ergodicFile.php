<?php
/**
 * Created by PhpStorm
 * User: SenCaoKing
 * Date: 2018/06/13
 * Time: 20:17
 */
/**
 * 遍历文件
 *
 * opendir()和readdir()打开一个目录，读取他的内容，然后关闭
 */

/**
 * 相关函数:
 * opendir() --- 打开目录句柄
 * readdir() --- 从目录句柄中读取条目
 * is_dir() --- 判断给定文件名是否是一个目录
 * closedir() --- 关闭目录句柄
 */

/**
 * @param $dir   文件目录
 * @return array
 */

function ergodicFile($dir){
    $files = [];
    if($handle = opendir($dir)){
        while(($file = readdir($handle)) !== false){
            if($file != '.' && $file != '..'){
                if(is_dir($dir."/".$file)){
                    $files[$file] = ergodicFile($dir."/".$file);
                }else{
                    $files[] = $file;
                }
            }
        }
        closedir($handle);
        return $files;
    }
}
echo "<pre>";
print_r(ergodicFile('./'));


?>